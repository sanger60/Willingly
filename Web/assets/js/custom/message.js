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

        var self= this;
        $.ajax({
            url:"https://willingly.tk/inc/php/Get_ChatMessages.php",
            method:"POST",
            data:{ChatRoomID:id},
            dataType:"JSON",
            success:function(data){
                var main = document.getElementById("msgList");
                main.innerHTML = "";

                for(var i=0;i< data.Data.length;i++){
                    if(data.Data[i].Sender == 21){
                        if(data.Data[i].IsRead)
                        {
                            main.innerHTML += "<div class='wt-offerermessage wt-readmessage'> <figure><img src='/../../../assets/images/messages/img-12.jpg' alt='image description'></figure> <div class='wt-description'> <div class='clearfix'></div> <p>"+data.Data[i].Text+"</p> <div class='clearfix'></div> </div> </div>";
                        }
                        else{
                            main.innerHTML += "<div class='wt-offerermessage'> <figure><img src='/../../../assets/images/messages/img-12.jpg' alt='image description'></figure> <div class='wt-description'> <div class='clearfix'></div> <p>"+data.Data[i].Text+"</p> <div class='clearfix'></div> </div> </div>";
                        }
                    }
                    else{
                        if(data.Data[i].IsRead)
                        {
                            main.innerHTML += "<div class='wt-memessage wt-readmessage'> <figure><img src='/../../../assets/images/messages/img-11.jpg' alt='image description'></figure> <div class='wt-description'> <div class='clearfix'></div> <p>"+data.Data[i].Text+"</p> <div class='clearfix'></div> </div> </div>";
                        }
                        else{
                            main.innerHTML += "<div class='wt-memessage'> <figure><img src='/../../../assets/images/messages/img-11.jpg' alt='image description'></figure> <div class='wt-description'> <div class='clearfix'></div> <p>"+data.Data[i].Text+"</p> <div class='clearfix'></div> </div> </div>";
                        }
                    }
                }
            },
            error:function(a,b,g){
                Swal.fire("Hatalı İşlem");
            }
    });
}
