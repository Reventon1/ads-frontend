$(document).ready(function() {

    var arrayAds = new Array();

    $("#modal").hide();

    $("#add").click(function() {
        $("#modal").show();
    });

    $("#close").click(function() {
        $("#modal").hide();
    });

    $('#new').click(function() {
        var ad = {
            text: $('textarea[name="text"]').val(),
            contactName: $('input[name="name"]').val(),
            contactPhone: $('input[name="phone"]').val(),
        }
        

        arrayAds.push(ad);
        console.log(arrayAds)

        renderAds();

        $("#modal").hide();
  
    });

    // функция отрисовки новых объявлений
    function renderAds() {
        // очищаем блок контента
        $('#content').html('');

        //отрисовываем новые объявления
        arrayAds.map(ad => {
            var adHTML = 
            '<div class="Content__box">' +
                '<div class="Box__info">'+ ad.text +'</div>' +
                '<div class="Box__name">'+ ad.contactName +'</div>' +
                '<div class="Box__phone">'+ ad.contactPhone +'</div>' +
            '</div>';
        
            $('#content').append(adHTML);
        });





    }
});