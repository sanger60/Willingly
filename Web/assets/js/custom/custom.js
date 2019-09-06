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
    else if(keyType == "Jobs"){
        catKey= 2;
    }

    if(catKey == 1)
    {
        if(key != "")
        {
            window.location.href="userlisting.php/?search="+key+"&searchType="+catKey+"&page="+page;
        }
        else{
            window.location.href="userlisting.php/?searchType="+catKey+"&page="+page;

        }
    }
    else if(catKey == 2){
        if(key != "")
        {
            window.location.href="joblisting.php/?search="+key+"&searchType="+catKey+"&page="+page;
        }
        else{
            window.location.href="joblisting.php/?searchType="+catKey+"&page="+page;

        }
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

    if(category != null && category != ""){

        var ul = $('#filtertags');
        var li = ul.find('li:first').clone(true).appendTo(ul);

        li.find('a span')[0].innerText = "Kategori = "+category;
    }

    if(price != null && price != ""){
        var ul = $('#filtertags');
        var li = ul.find('li:first').clone(true).appendTo(ul);

        li.find('a span')[0].innerText = "Fiyat = "+price;
    }

        
     var ul2 = $('#filtertags');
     var liCount = ul2.find('li');
     if(liCount.length > 1){
         ul2.find('li:first').find('a span')[0].innerText = "Filtreler = ";
     }

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
function updateQueryStringParam(param, value) {
    baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
    urlQueryString = document.location.search;
    var newParam = key + '=' + value,
    params = '?' + newParam;
  
    // If the "search" string exists, then build params from it
    if (urlQueryString) {
      keyRegex = new RegExp('([\?&])' + key + '[^&]*');
      // If param exists already, update it
      if (urlQueryString.match(keyRegex) !== null) {
        params = urlQueryString.replace(keyRegex, "$1" + newParam);
      } else { // Otherwise, add it to end of query string
        params = urlQueryString + '&' + newParam;
      }
    }
    window.history.replaceState({}, "", baseUrl + params);
  }

function FreeLancerFilter(){
    var filterProp = $('input[name=category]:checked');
    var filterCheckedProps = "";

    console.log(filterProp);

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
    var priceKey = urlParams.get('price');
    if(catKey != null && catKey != "" && priceKey != null && priceKey != "")
    {
        var locate = window.location.href;
        console.log("link = "+locate);
        if(filterCheckedProps != "")
        {
            locate = locate.replace(catKey,filterCheckedProps);
        }

        if(PriceTemplate != "")
        {
            locate = locate.replace(priceKey,PriceTemplate);
        }

        window.location.href = locate;
    }
    else if(catKey != null && catKey != ""){
        if(filterCheckedProps != "")
        {
            locate = locate.replace(catKey,filterCheckedProps);

            window.location.href = locate;
        }
    }
    else if(priceKey != null && priceKey != ""){
        if(PriceTemplate != ""){
            locate = locate.replace(priceKey,PriceTemplate);

            window.location.href = locate;
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
    document.getElementById('max-range').setAttribute("min",val.toString()); 
  }

function updateTextInput2(val) {
    document.getElementById('maxOutput').innerText=val+" ₺"; 
  }

  // ---------------------------------------------------------------------------------- \\
                        //          USER    DETAİLS     PAGE            \\

function AdDetail(item){
    var id = item.getAttribute("title");

    window.location.href="http://willingly.com/usersingle.php?uniqorne="+id;
}

if(window.location.toString().includes("http://willingly.com/usersingle.php"))
{
    var urlParams = new URLSearchParams(location.search);
    var advId = urlParams.get('uniqorne');
    
    var AdDetailVue = new Vue({
        el: '#wt-main',
        data:{
            item = []
        },
        mounted: function(){
            var self = this;
            $.ajax({
                url:"http://willingly.tk/inc/php/Get_FreelanceAdvertisement.php",
                method: "POST",
                data: {Id:advId},
                dataType: "JSON",
                success:function(data) {
                    self.item = data;
                },
                error:function(a,b,g) {
                    Swal.fire("Bir hata oluştu !");
                }
            });
        }
    });

}

function FreelancerSendOffer(){
    var offer = document.getElementById("#txtOffer").value;
    var id = 1;

    $.ajax({
        url:"",
        method:"POST",
        data:{Offer:offer,AdId:id},
        dataType:"JSON",
        success:function(data){
            if(data.Status == true){
                Swal.fire("Teklifiniz Gönderildi");
            }
            else{
                Swal.fire("Teklifiniz Gönderilemedi");
            }
        },
        error:function(a,b,g){
            Swal.fire("Teklifiniz Gönderilemedi");
        }
    });
}

  // ---------------------------------------------------------------------------------- \\
                        //          JOB    LİST     PAGE            \\

    function JobList(){
        var urlParams = new URLSearchParams(location.search);
        var searchKey = urlParams.get('search');
        var searchType2 = urlParams.get('searchType');
        var page = urlParams.get('page');
        var category = urlParams.get("category");
        var price = urlParams.get("price");
    
        if(category != null && category != ""){
    
            var ul = $('#filtertags');
            var li = ul.find('li:first').clone(true).appendTo(ul);
    
            li.find('a span')[0].innerText = "Kategori = "+category;
        }
    
        if(price != null && price != ""){
            var ul = $('#filtertags');
            var li = ul.find('li:first').clone(true).appendTo(ul);
    
            li.find('a span')[0].innerText = "Fiyat = "+price;
        }
    
            
        var ul2 = $('#filtertags');
        var liCount = ul2.find('li');
        if(liCount.length > 1){
            ul2.find('li:first').find('a span')[0].innerText = "Filtreler = ";
        }
    
        var ItemsVue = new Vue({
            el: '#wt-main',
            data:{
                categories: [],
                MinPrice: 0,
                MaxPrice: 0,
                items: []
            },
            mounted: function () {
                var self = this;
                $.ajax({
                    url: 'http://willingly.tk/inc/php/Get_JobAdvertisement.php',
                    method: 'POST',
                    data: {searchKey:searchKey,searchtip: searchType2,PageId:page,category: category,price:price},
                    dataType: "JSON",
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

    function JobPageChanged(a){
    
        var PageId = parseInt(a.value);
        console.log("Basılan page ID = "+PageId);
        console.log("Şuanki Location = "+location);
        if(location.toString().includes('search') || location.toString().includes('searchType'))
        {
            console.log("ilk if");
            var urlParams = new URLSearchParams(location.search);
            var searchKey = urlParams.get('search');
            var searchType2 = urlParams.get('searchType');
            window.location.href = "http://willingly.com/joblisting.php/?search="+searchKey+"&searchType="+searchType2+"&page="+PageId;
        }
        else if(location.toString().includes('category')){
            console.log("ikinci if");
    
            var urlParams = new URLSearchParams(location.search);
            var catKey = urlParams.get('category');
            window.location.href = "http://willingly.com/joblisting.php/?category="+catKey+"&page="+PageId;
    
        }
        else{
            console.log("son deger girdi");
    
            window.location.href = "http://willingly.com/joblisting.php/?page="+PageId;
        }
    
       
    }

    function JobFilter(){
        var filterProp = $('input[name=category]:checked');
        var filterCheckedProps = "";
    
        console.log(filterProp);
    
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
        var PriceTemplate = document.getElementById("wt-consultationfeeamount").value;
        
    
        var urlParams = new URLSearchParams(location.search);
        var catKey = urlParams.get('category');
        var priceKey = urlParams.get('price');
        if(catKey != null && catKey != "" && priceKey != null && priceKey != "")
        {
            var locate = window.location.href;
            console.log("link = "+locate);
            if(filterCheckedProps != "")
            {
                locate = locate.replace(catKey,filterCheckedProps);
            }
    
            if(PriceTemplate != "")
            {
                locate = locate.replace(priceKey,PriceTemplate);
            }
    
            window.location.href = locate;
        }
        else if(catKey != null && catKey != ""){
            if(filterCheckedProps != "")
            {
                locate = locate.replace(catKey,filterCheckedProps);
    
                window.location.href = locate;
            }
        }
        else if(priceKey != null && priceKey != ""){
            if(PriceTemplate != ""){
                locate = locate.replace(priceKey,PriceTemplate);
    
                window.location.href = locate;
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
    
    function JobDetail(item){
        var id = item.getAttribute("title");

        window.location.href="http://willingly.com/jobsingle.php?uniqorne="+id;
    }