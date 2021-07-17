document.addEventListener('DOMContentLoaded',function(){
    'use strict'
   
    // Initialize feather icons
    feather.replace();

    // Initialize AOS
    AOS.init();

    // textarea max lenght
    $('.max-500-characters').on("input", function(){
        var maxlength = $(this).attr("maxlength");
        var currentLength = $(this).val().length;

        if( currentLength >= maxlength ){
            $(this).next('.form-text').text('Maximum number of characters reached.');
        }else{
            $(this).next('.form-text').text(currentLength+'/500');
        }
    });

    // TellInput
    var demoPhoneInput = document.querySelector("#demo-phone-input");
    window.intlTelInput(demoPhoneInput, {
        initialCountry: "auto",
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "us";
            success(countryCode);
            });
        },
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.min.js',
    });

     // Get current year for footer
     var currentYear= new Date().getFullYear(); 
     $('.currentyear').html(currentYear);

    // Reveal features card on homepage
    $('.features-card').on('click',function(){
        let feature = $(this).data('feature');

        if($(this).find('.text').is(":hidden")){
            $('.features-card').find('.text').hide();
            $('.features-card').find('.line').hide();
            $(this).find('.text').fadeIn();
            $(this).find('.line').fadeIn();

            var viewportWidth = $(window).width();
            console.log(viewportWidth);
            if(viewportWidth > 769){
                if(feature == 'bookings'){
                    $(".phone").fadeOut();
                    $("#phone-bookings").fadeIn();
                    $(".phone-box").attr('class','phone-box bookings');
                }
                if(feature == 'portfolio'){
                    $(".phone").fadeOut();
                    $("#phone-portfolio").fadeIn();
                    $(".phone-box").attr('class','phone-box portfolio');
                }
                if(feature == 'payments'){
                    $(".phone").fadeOut();
                    $("#phone-payments").fadeIn();
                    $(".phone-box").attr('class','phone-box payments');
                }
                if(feature == 'analytics'){
                    $(".phone").fadeOut();
                    $("#phone-analytics").fadeIn();
                    $(".phone-box").attr('class','phone-box analytics');
                }
                if(feature == 'clients'){
                    $(".phone").fadeOut();
                    $("#phone-clients").fadeIn();
                    $(".phone-box").attr('class','phone-box clients');
                }
            }

            
        }

        
        
    })

    // blog slide
    var blogSlide = $('.blog-slide');
    blogSlide.owlCarousel({
        center: false,
        loop:false,
        margin:20,
        items: 4,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        stagePadding: 100,
        autoWidth:true,
        nav:false,
    });
    
    // blog slide navigation buttons control
    $('#next-blog').on('click',function(){
        blogSlide.trigger('next.owl');
    });
    $('#prev-blog').on('click',function(){
        blogSlide.trigger('prev.owl');
    });


        // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa-minus").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
    });

    $('#billing_annually').hide();

    $('#customRange2').change(function(){
        // $('#billing_monthly').show();
        // $('#billing_annually').hide();
        $('#customRange2').val('0');
        $('#billing_monthly').hide();
        $('#billing_annually').show();

    });
    $('#customRange3').change(function(){
            // $('#billing_monthly').hide();
            // $('#billing_annually').show();
            $('#customRange3').val('1');
        $('#billing_monthly').show();
        $('#billing_annually').hide();

    });



    // profile slide
    var profileSlide = $('.profile-slide');
    profileSlide.owlCarousel({
        center: false,
        loop:false,
        margin:20,
        items: 1,
        autoWidth:true,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        stagePadding: 0,
        nav:false,
    });
    // profiles slide navigation buttons control
    $('#next-profiles').on('click',function(){
        profileSlide.trigger('next.owl');
    });
    $('#prev-profiles').on('click',function(){
        profileSlide.trigger('prev.owl');
    });

    

});
