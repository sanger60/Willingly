function ErrorCode(a){
    if(a.value == "")
    a.style.borderColor = "red";
    else{
        a.style.borderColor = "#999";
    }
}

function SearchBtn(){
    var key = document.getElementById("SearchKey").value;
    var radios = document.getElementsByName('SearchType');
    var keyType;
    for (var i = 0, length = radios.length; i < length; i++)
    {
        if (radios[i].checked)
        {
            keyType = radios[i].value;
                                break;
        }
    }

    var catKey = 0;
    if(keyType == "Willingers"){
        catKey= 1;
    }
    else if(keyType == "MeetUp"){
        catKey= 2;
    }
    window.location.href="userlisting.php/?search="+key+"&searchType="+catKey;
}
// img,user,ilan başlık,ilan parası,ülke,ilan açıklama,ilan rate,ilan skills,ilan feedback

function FreeLancerList(){
    var urlParams = new URLSearchParams(location.search);
    var searchKey = urlParams.get('search');
    var searchType2 = urlParams.get('searchType');

    var ItemsVue = new Vue({
        el: '#wt-main',
        data: {
            
        },
        data () {
            return {
              items: [],
              
              resource_url: 'http://hootlex.github.io/vuejs-paginator/samples/animals1.json'
            }
          },
        created() {
            fetch(this.items)
        },
        mounted: function () {
            var self = this;
            $.ajax({
                url: 'userlisting.php',
                method: 'POST',
                data: {searchKey:searchKey,searchtip: searchType2},
                dataType: "JSON",
                success: function (data) {
                    self.items = JSON.parse(data);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
}

function IndexSubmit(){
    console.log("Submit Olması lAZIM");
    $("#searchDataForm").submit();
}