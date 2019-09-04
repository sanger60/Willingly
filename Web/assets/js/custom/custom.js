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
$(document).ready(function() {
    if(window.location == "http://willingly.com/userlisting.php")
    FreeLancerList();

});
var ItemsVue;
function FreeLancerList(){
    // var urlParams = new URLSearchParams(location.search);
    // var searchKey = urlParams.get('search');
    // var searchType2 = urlParams.get('searchType');

     ItemsVue = new Vue({
        el: '#wt-main',
        data:{
              items: []
        },
        created(){
            fetch("./assets/data.json")
            .then((res) => {return res.json(); })
            .then((res) => { items = res; this.items = items; })
        }
        // mounted: function () {
        //     var self = this;
        //     $.ajax({
        //         url: 'userlisting.php',
        //         method: 'POST',
        //         data: {searchKey:searchKey,searchtip: searchType2},
        //         dataType: "JSON",
        //         success: function (data) {
        //             self.items = JSON.parse(data);
        //         },
        //         error: function (error) {
            // Swal.fire({
            //     type: 'error',
            //     title: 'Oops...',
            //     text: 'Bir şeyler yanlış gitti!'
            // });
        //         }
        //     });
        // }
    });

}

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
    var filterCheckedProps = [];
    var filterStr ="";

    for(var i=0;i< filterProp.length;i++){
        if(filterProp[i].checked == true)
        filterCheckedProps.push(filterProp[i].value);
    }
    
    for(var i=0;i< filterCheckedProps.length;i++){
        filterStr = filterCheckedProps[i] +",";
    }

    var minRange = document.getElementById("min-range").value;
    var maxRange = document.getElementById("max-range").value;
    
    var PriceTemplate = minRange + "-"+maxRange;
    $.ajax({
        url: "userlisting.php",
        method: "POST",
        data: {category: filterStr,price: PriceTemplate},
        dataType: "JSON",
        success: function(data) {
            ItemsVue.Items = JSON.parse(data);
        },
        error: function(a,b,g){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bir şeyler yanlış gitti!'
            });
        }
    });
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