$(function() {
    var path = window.location.href; // Mengambil data URL pada Address bar
    $('nav a').each(function() {
        // Jika URL pada menu ini sama persis dengan path...
        if (this.href === path) {
            // Tambahkan kelas "active" pada menu ini
            $(this).addClass('activeX');
        }else{
            $(this).removeClass('activeX')
        }
    });
});

$(function() {
    var path = window.location.href; // Mengambil data URL pada Address bar
    $('.sidebar-acc a').each(function() {
        // Jika URL pada menu ini sama persis dengan path...
        if (this.href === path) {
            // Tambahkan kelas "active" pada menu ini
            $(this).addClass('active-sb');
        }else{
            $(this).removeClass('active-sb')
        }
    });
});

// $(function() {
//     var path = window.location.href; // Mengambil data URL pada Address bar
//     $('.ct-accs a').each(function() {
//         // Jika URL pada menu ini sama persis dengan path...
//         if (this.href === path) {
//             // Tambahkan kelas "active" pada menu ini
//             $(this).addClass('active-accs');
//         }else{
//             $(this).removeClass('active-accs');
//         }
//     });
// });

// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active-accs');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
    $('#tabs-nav li').removeClass('active-accs');
    $(this).addClass('active-accs');
    $('.tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
});




// $(".alamat").click(function(){
//     $(".two").css("display", "block");
//     $('.one').css("display", "none");
//     var two = $(".two");
//     if(two.css("display", "block")){
//         $('.alamat').addClass('active-accs');
//         $('.data-diri').removeClass('active-accs');
//     }else{
//         $('.alamat').removeClass('active-accs');
//     }
// });

// $(document).ready(()=> {
//     var url = location.href.replace(/\/$/, "");
//     if(location.hash){
//         const hash = url.split('#');
//         $('#myTab a[href="#'+hash[1]+'"]').tab("show");
//         url = location.href.replace(/\/#/, "#");
//         history.replaceState(null, null, url);
//     }

//     $('a[data-toggle="tab"]').on("click", function(){
//         var newUrl;
//         const hash = $(this).attr("href");
//         if(hash == "#data-diri"){
//             newUrl = url.split('#')[0];
//         }else{
//             newUrl = url.split('#')[0] + hash;
//         }

//         newUrl += "/";
//         history.replaceState(null, null, newUrl);
//     })
// });
