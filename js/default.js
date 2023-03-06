$(document).ready(function(){
    $(".delete, .confirm").on("click", null, function(){
        return confirm("Are you sure?");
    });
});
$(function() {
    $('#table').bootstrapTable();

    $(".delete, .confirm").on("click", null, function(){
        return confirm("Are you sure?");
    });
});