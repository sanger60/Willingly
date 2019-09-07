$(document).ready(function() {
    var MessageVue = new Vue({
        el:'#wt-main',
        data:{
            items: [],
            result: []
        },
        mounted: function(){
            var self = this;
            $.ajax({
                url: "https://willingly.tk/inc/php/Get_ChatList.php",
                method:"GET",
                dataType:"JSON",
                success: function(data){
                    self.items = data.Data;
                },
                error: function(a,b,g){
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Bir şeyler yanlış gitti!'
                    });            
                }
            });
            $.ajax({
                url: "https://willingly.tk/inc/php/Get_UserInformation.php",
                method: "GET",
                dataType: "JSON",
                withCredentials : true,
                success: function(data) {
                    self.result = data.Data[0];
                    console.log(data.Data[0]);
                },
                error: function(a,r,g){
                    console.log(a);
                    console.log(r);
                    console.log(g);
                }
            });
        }
    });
});



function ViewMessage(a){
    var id = a;

    var MyVue = new Vue({
        el: '#wt-main',
        data:{
            Items:[]
        },
        mounted: function(){
            var self= this;
            $.ajax({
                url:"https://willingly.tk/inc/php/Get_ChatMessages.php",
                method:"POST",
                data:{ChatRoomID:id},
                dataType:"JSON",
                success:function(data){
                     self.Items = data.Data;
                },
                error:function(a,b,g){
                    Swal.fire("Hatalı İşlem");
                }
            });
        }
    });
}