function ErrorCode(a){
    if(a.value == "")
    a.style.borderColor = "red";
    else{
        a.style.borderColor = "#999";
    }
}

function pageChanged(a){
    
    var PageId = parseInt(a.value);
    console.log("Basılan page ID = "+PageId);
    console.log("Şuanki Location = "+location);
    if(location.toString().includes('search') || location.toString().includes('searchType'))
    {
        console.log("ilk if");
        var urlParams = new URLSearchParams(location.search);
        var searchKey = urlParams.get('search');
        var searchType2 = urlParams.get('searchType');
        window.location.href = "http://willingly.com/userlisting.php/?search="+searchKey+"&searchType="+searchType2+"&page="+PageId;
    }
    else if(location.toString().includes('category')){
        console.log("ikinci if");

        var urlParams = new URLSearchParams(location.search);
        var catKey = urlParams.get('category');
        window.location.href = "http://willingly.com/userlisting.php/?category="+catKey+"&page="+PageId;

    }
    else{
        console.log("son deger girdi");

        window.location.href = "http://willingly.com/userlisting.php/?page="+PageId;
    }

        
    //     $.ajax({
    //         url:"http://willingly.tk/inc/php/Get_FreelanceAdvertisement.php",
    //         method:"POST",
    //         data:{searchKey:searchKey,searchtip: searchType2,PageId:pageId},
    //         dataType:"JSON",
    //         success:function(data){
    //             console.log(data);
    //         },
    //         error:function(a,r,b){
    //             Swal.fire('Hata Oluştu');
    //         }
    //     })
    // }
    // else if(location.toString().includes('categoryId')){
    //     var urlParams = new URLSearchParams(location.search);
    //     var catKey = urlParams.get('categoryId');

    //     $.ajax({
    //         url:"http://willingly.tk/inc/php/Get_FreelanceAdvertisement.php",
    //         method:"POST",
    //         data:{categoryId: catKey,PageId:pageId},
    //         dataType:"JSON",
    //         success:function(data){
    //             console.log(data);
    //         },
    //         error:function(a,r,b){
    //             Swal.fire('Hata Oluştu');
    //         }
    //     })
    // }
    // else{
        
    //     $.ajax({
    //         url:"http://willingly.tk/inc/php/Get_FreelanceAdvertisement.php",
    //         method:"POST",
    //         data:{PageId:pageId},
    //         dataType:"JSON",
    //         success:function(data){
    //             console.log(data);
    //         },
    //         error:function(a,r,b){
    //             Swal.fire('Hata Oluştu');
    //         }
    //     })
    // }
}

function ListWithCategory(a){

    var id = parseInt(a.name);
    
    window.location.href = "http://willingly.com/userlisting.php/?category="+id+"&page=1";
    
}

function SearchBtn(){
    var key = document.getElementById("SearchKey").value;
    var page = document.getElementById("pageIndex").value;
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

    if(key != "")
    {
        window.location.href="userlisting.php/?search="+key+"&searchType="+catKey+"&page="+page;
    }
    else{
        window.location.href="userlisting.php/?searchType="+catKey+"&page="+page;

    }
}
// img,user,ilan başlık,ilan parası,ülke,ilan açıklama,ilan rate,ilan skills,ilan feedback
if(window.location.toString().includes("http://willingly.com/userlisting.php"))
{
    FreeLancerList();

}

// Vue.js main element en başa alınacak olay bitiyor category submit olanlara css yazılacak !

// $(document).ready(function() {
//     FreeLancerList();

// });
var ItemsVue;
function FreeLancerList(){

     var urlParams = new URLSearchParams(location.search);
     var searchKey = urlParams.get('search');
     var searchType2 = urlParams.get('searchType');
     var page = urlParams.get('page');
     var category = urlParams.get("category");
     var price = urlParams.get("price");
        // created(){
        //     fetch("./assets/data.json")
        //     .then((res) => {return res.json(); })
        //     .then((res) => { items = res; this.items = items; })
        // },
     ItemsVue = new Vue({
        el: '#mainVue',
        data:{
            categories: [],
            MinPrice: 0,
            MaxPrice: 0,
            items: []
        },
        mounted: function () {
            var self = this;
            $.ajax({
                url: 'http://willingly.tk/inc/php/Get_FreelanceAdvertisement.php',
                method: 'POST',
                data: {searchKey:searchKey,searchtip: searchType2,PageId:page,category: category,price:price},
                dataType: "JSON",
                timeout: 60000,
                success: function (data) {
                    self.items = data;
                },
                error: function (error) {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Bir şeyler yanlış gitti!'
                    });
                }
            });

            $.ajax({
                url: 'http://willingly.tk/inc/php/Get_FilterConfig.php',
                method: 'POST',
                dataType: "JSON",
                timeout: 60000,
                success: function (data) {
                    self.categories = data.Catagory;
                    self.MinPrice = data.Price[0].min;
                    self.MaxPrice = data.Price[0].max;
                },
                error: function (error) {
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Bir şeyler yanlış gitti!'
                    });
                }
            });
        }
    });

    window.vue = ItemsVue;

}
// function changeBox(a){
//     if(a.checked == true){
//         a.checked = false;
//     }
//     else{
//         a.checked = true;
//     }
// }
function FreeLancerCategoryFilter(a,b){
    if(b == "category"){
        var filterProp = document.getElementsByName("category");

        for(var i=0;i< filterProp.length;i++){
            var filterPropParent = filterProp[i].parentElement;
            if(!filterProp[i].value.startsWith(a.value))
            {
                filterPropParent.style.display = "none";
            }
            else{
                filterPropParent.style.display = "block";
            }
        }
    }
}

function FreeLancerFilter(){
    var filterProp = document.getElementsByName("category");
    var filterCheckedProps = "";

    for(var i=0;i< filterProp.length;i++){
        if(filterProp[i].checked == true)
        {
            filterCheckedProps += filterProp[i].value;

            if(i != (filterProp.length-1))
            {
                filterCheckedProps += ",";
            }
        }
    }

    console.log("Categori Filtre Post Sorgusu : "+filterCheckedProps);
    var minRange = document.getElementById("min-range").value;
    var maxRange = document.getElementById("max-range").value;
    
    var PriceTemplate = minRange + "-"+maxRange;

    var urlParams = new URLSearchParams(location.search);
    var catKey = urlParams.get('category');

    if(catKey != null && catKey != "")
    {
        if(filterCheckedProps != "")
        {
            urlParams.set("category",filterCheckedProps);
        }
    }
    else{
        if(filterCheckedProps != "" && PriceTemplate != "")
        {
            window.location.href += "&price="+PriceTemplate+"&category="+filterCheckedProps;
    
        }
        else if(filterCheckedProps != ""){
            window.location.href += "&category="+filterCheckedProps;
    
        }
        else if(PriceTemplate != ""){
            window.location.href += "&price="+PriceTemplate;
        }
    }
}

function IndexSubmit(){
    console.log("Submit Olması lAZIM");
    $("#searchDataForm").submit();
}

function updateTextInput(val) {
    document.getElementById('minOutput').innerText=val+" ₺"; 
  }

function updateTextInput2(val) {
    document.getElementById('maxOutput').innerText=val+" ₺"; 
  }