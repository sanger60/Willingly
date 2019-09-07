$(document).ready(function() {
    var urlParams = new URLSearchParams(location.search);
    var searchKey = urlParams.get('quaternParam');

    window.vue = new Vue({
        el: '#wt-main',
        data: {
            items : []
        },
        methods: {
            
        },
        mounted: function() {
            var self = this;
            $.ajax({
                url: "",
                method: "POST",
                data:{UserId: searchKey},
                dataType: "JSON",
                success: function(data) {
                    self.items = data.Data;
                },
                error: function(a,r,g){
                    Swal.Fire("Bilinmeyen bir hata oluştu !");
                }
            });
        }
    });
});