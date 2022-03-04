/*
Name: 			Tables / Editable - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	4.0.0
*/

(function ($) {
    "use strict";

    var EditableTable = {
        options: {
            addButton: "#addToTable",
            table: "#datatable-editable",
            dialog: {
                wrapper: "#dialog",
                cancelButton: "#dialogCancel",
                confirmButton: "#dialogConfirm",
            },
        },

        initialize: function () {
            this.setVars().build().events();
        },

        setVars: function () {
            this.$table = $(this.options.table);
            this.$addButton = $(this.options.addButton);

            // dialog
            this.dialog = {};
            this.dialog.$wrapper = $(this.options.dialog.wrapper);
            this.dialog.$cancel = $(this.options.dialog.cancelButton);
            this.dialog.$confirm = $(this.options.dialog.confirmButton);

            return this;
        },

        build: function () {
            this.datatable = this.$table.DataTable({
                dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
                aoColumns: [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    { bSortable: false },
                ],
            });

            window.dt = this.datatable;

            return this;
        },

        events: function () {
            var _self = this;

            this.$table
                // .on("click", "a.save-row", function (e) {
                //     e.preventDefault();
                    
                //      _self.rowSave($(this).closest("tr"));
                // })
                .on("click", "a.cancel-row", function (e) {
                    e.preventDefault();

                    _self.rowCancel($(this).closest("tr"));
                })
                .on("click", "a.edit-row", function (e) {
                    e.preventDefault();
                    
                    _self.rowEdit($(this).closest("tr"));
                })
                .on("click", "a.remove-row", function (e) {
                    e.preventDefault();

                    var $row = $(this).closest("tr"),
                        itemId = $row.attr("data-item-id");

                    $.magnificPopup.open({
                        items: {
                            src: _self.options.dialog.wrapper,
                            type: "inline",
                        },
                        preloader: false,
                        modal: true,
                        callbacks: {
                            change: function () {
                                _self.dialog.$confirm.on("click", function (e) {
                                    e.preventDefault();

                                    $.ajax({
                                        url: "/",
                                        method: "GET",
                                        data: {
                                            id: itemId,
                                        },
                                        success: function () {
                                            _self.rowRemove($row);
                                        },
                                    });

                                    $.magnificPopup.close();
                                });
                            },
                            close: function () {
                                _self.dialog.$confirm.off("click");
                            },
                        },
                    });
                });

            this.$addButton.on("click", function (e) {
                e.preventDefault();

                _self.rowAdd();
            });

            this.dialog.$cancel.on("click", function (e) {
                e.preventDefault();
                $.magnificPopup.close();
            });

            return this;
        },

        // ==========================================================================================
        // ROW FUNCTIONS
        // ==========================================================================================
        rowAdd: function () {
            this.$addButton.attr({ disabled: "disabled" });

            var actions, data, $row;

            actions = [
                '<a href="#" class="hidden on-editing save-row" onclick="insertItem()"><i class="fas fa-save"></i></a>',
                '<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>',
                '<a href="#" class="on-default edit-row" onclick=""><i class="fas fa-pencil-alt"></i></a>',
                '<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>',
            ].join(" ");

            data = this.datatable.row.add([
                "",
                "",
                "",
                "",
                "",
                "",
                "",
                actions,
            ]);
            $row = this.datatable.row(data[0]).nodes().to$();

            $row.addClass("adding").find("td:last").addClass("actions");

            this.rowEdit($row);

            this.datatable.order([0, "asc"]).draw(); // always show fields
        },

        rowCancel: function ($row) {
            var _self = this,
                $actions,
                i,
                data;

            if ($row.hasClass("adding")) {
                this.rowRemove($row);
            } else {
                data = this.datatable.row($row.get(0)).data();
                this.datatable.row($row.get(0)).data(data);

                $actions = $row.find("td.actions");
                if ($actions.get(0)) {
                    this.rowSetActionsDefault($row);
                }

                this.datatable.draw();
            }
        },

        rowEdit: function ($row) {
            var _self = this,
            data = this.datatable.row($row.get(0)).data();

            var id = ['','iName','itemGroup','unit','sPrice','cPrice','status']
            $row.children("td").each(function (i) {
                var $this = $(this);

                if ($this.hasClass("actions")) {
                    _self.rowSetActionsEditing($row);
                } else {
                   console.log(i);

                    if(i==2){
                        $this.html( '<select type="text" id="'+id[i]+'" name="'+id[i]+'" class="form-control input-block" value="' + data[i] + '"><option value="1">Saleable</option><option value="2">Purchasable</option></select>' );
                    }else if(i==6){
                        $this.html( '<select type="text" id="'+id[i]+'" name="'+id[i]+'" class="form-control input-block" value="' + data[i] + '"><option value="active">Active</option><option value="inactive">Inactive</option> </select>' );
                    }else if(i==0){
                        $this.html( '<input type="text" disabled id="'+id[i]+'" name="'+id[i]+'" class="form-control input-block" value="' + data[i] + '"/>' );
                    }else{
                        $this.html( '<input type="text" id="'+id[i]+'" name="'+id[i]+'" class="form-control input-block" value="' + data[i] + '"/>' );

                    }

                }
            });
        },

        // rowSave: function ($row) {
        //     var _self = this,
        //         $actions,
        //         values = [];

        //     if ($row.hasClass("adding")) {
        //         this.$addButton.removeAttr("disabled");
        //         $row.removeClass("adding");
        //     }

        //     values = $row.find("td").map(function () {
        //         var $this = $(this);

        //         if ($this.hasClass("actions")) {
        //             _self.rowSetActionsDefault($row);
        //             return _self.datatable.cell(this).data();
        //         } else {
        //             return $.trim($this.find("input").val());
        //         }
        //     });

        //     this.datatable.row($row.get(0)).data(values);

        //     $actions = $row.find("td.actions");
        //     if ($actions.get(0)) {
        //         this.rowSetActionsDefault($row);
        //     }

        //     this.datatable.draw();
        // },

        rowRemove: function ($row) {
            if ($row.hasClass("adding")) {
                this.$addButton.removeAttr("disabled");
            }

            this.datatable.row($row.get(0)).remove().draw();
        },

        rowSetActionsEditing: function ($row) {
            $row.find(".on-editing").removeClass("hidden");
            $row.find(".on-default").addClass("hidden");
        },

        rowSetActionsDefault: function ($row) {
            $row.find(".on-editing").addClass("hidden");
            $row.find(".on-default").removeClass("hidden");
        },
    };

    $(function () {
        EditableTable.initialize();
    });
}.apply(this, [jQuery]));


//***********************/ Ajax Custom Code /***********************//
showItem();
// Insert 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function insertItem(){
    
     let iName = document.getElementById("iName").value;
     var itemGroup = document.getElementById("itemGroup").value;
     var unit = document.getElementById("unit").value;
     var sPrice = document.getElementById("sPrice").value;
     var cPrice = document.getElementById("cPrice").value;
     var status = document.getElementById("status").value;  

    $.ajax({
        url: "/add/item",
        method: "post",
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            iName:iName, itemGroup:itemGroup, unit:unit, sPrice:sPrice, cPrice:cPrice, status:status
        },
        success: function () {
            showItem();
        }
    });
}

function itemDelete(id){

    var id= id;
        $.ajax({
            url: "/delete/item",
            method: "post",
            cache: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success: function () {
                showItem();
            }
        });
}
// Update Item
function updateItem(id){

    var id = id;
    var iName = document.getElementById("iName").value;
    var itemGroup = document.getElementById("itemGroup").value;
    var unit = document.getElementById("unit").value;
    var sPrice = document.getElementById("sPrice").value;
    var cPrice = document.getElementById("cPrice").value;
    var status = document.getElementById("status").value;  
    console.log(iName);
    $.ajax({
        url: "/update/item",
        method: "post",
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            updateId:id,iName:iName, itemGroup:itemGroup, unit:unit, sPrice:sPrice, cPrice:cPrice, status:status
        },
        success: function (res) {
            alert(res['message']);
        }
    });
}

// Show Item
function showItem(){
    console.log('ok');
    $.ajax({
        url: "/show/item",
        method: "get",
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            var data = '';
            $.each(res, function (key, value) {
                data = data + "<tr data-item-id='"+ value.id +"'>"
                data = data + "<td scope='row'>" + ++key + "</td>"
                data = data + "<td>" + value.item_name + "</td>"
                data = data + "<td>" + value.group_id + "</td>"
                data = data + "<td>" + value.unit_name + "</td>"
                data = data + "<td>" + value.sale_price + "</td>"
                data = data + "<td>" + value.purchase_price + "</td>"
                data = data + "<td>" + value.status + "</td>"
                data = data + "<td class='actions'>"
                data = data + "<a class='hidden on-editing save-row' onclick='updateItem(" + value.id + ")'><i class='fas fa-save'></i> </a>"
                data = data + "<a class='hidden on-editing cancel-row'><i class='fas fa-times'></i> </a>"
                data = data + "<a class='on-default edit-row'><i class='fas fa-pencil-alt'></i> </a>"
                data = data + "<a class='on-default' onclick='itemDelete(" + value.id + ")'><i class='far fa-trash-alt'></i> </a>"
                data = data + "</td>"
                data = data + "</tr>"
            })
            $('#tabledody').html(data);
            }
    });
}