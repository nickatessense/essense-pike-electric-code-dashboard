jQuery(document).ready(function($){

    mobileNavMenu();

    // Dropdown functionality
    toggleDropdowns();

    // Sets progress of every progress-ring class
    setProgressRing();

    // Listens for every .modal-exit click then closes corresponding modal
    modalExit();

    // Listens for triggers to show modal
    modalShow();

    // For training page, toggles charts
    summaryOptionsToggle();

    // Sets all progress bars widths and tooltips
    progressBarsInit();

    // Slick slider
    $('.slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: '30px',
        infinite:true,
        prevArrow: '<span class="slick-prev dashicons dashicons-arrow-left-alt2"></span>',
        nextArrow: '<span class="slick-next dashicons dashicons-arrow-right-alt2"></span>',
        responsive: [
            {
              breakpoint: 577,
              settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
              }
            }
        ]
    });

    // Activates input range slider ability
    $( ".input-range-slider" ).slider({
        range: true,
        min: 0,
        max: 30,
        values: [ 10, 20 ],
        create: function( event, ui ) {
            let slide = event.target;
            let values = $(slide).slider( "values" );
            let min = $(slide).slider( "option", "min" );
            let max = $(slide).slider( "option", "max" );
            $(slide).find('.ui-slider-handle')[0].innerText = values[0];
            $(slide).find('.ui-slider-handle')[1].innerText = values[1];
            $(slide).prepend("<span class='min'>"+min+"</span>");
            $(slide).append("<span class='max'>"+max+"</span>");
        },
        slide: function( event, ui ) {
            let slide = event.target;
            $(slide).find('.ui-slider-handle')[0].innerText = ui.values[0];
            $(slide).find('.ui-slider-handle')[1].innerText = ui.values[1];
        }
    });

    function mobileNavMenu(){
        $('#mobile-nav .dashicons-menu').click(function(){

            let mobile_nav = $(this).parents('#mobile-nav');
            let main_sidebar = $('#main-sidebar');

            if( $(mobile_nav).hasClass('active') ){
                $(mobile_nav).removeClass('active');
                $(main_sidebar).removeClass('active');
            }else{
                $(mobile_nav).addClass('active');
                $(main_sidebar).addClass('active');
            }
        });
    }

    function setProgressRing() {
        let progress_rings = document.querySelectorAll('.progress-ring');

        for (let i = 0; i < progress_rings.length; i++) {
            let progress_ring = progress_rings[i];
            let svg = progress_ring.querySelector('svg');
            let circle = progress_ring.querySelector('circle');
            let text = svg.querySelector('text');
            let progress = progress_ring.getAttribute('data-progress');

            let width = progress_ring.offsetWidth;
            circle.setAttribute('r', (width / 2) - 20);
            circle.setAttribute('cx', (width / 2));
            circle.setAttribute('cy', (width / 2));



            let radius = circle.r.baseVal.value;
            let circumference = radius * 2 * Math.PI;

            let background_circle = circle.cloneNode();

            background_circle.classList.remove('progress-ring-circle');
            background_circle.classList.add('progress-ring-circle-background');

            progress_ring.querySelector('svg').insertBefore( background_circle, circle );

            circle.style.strokeDasharray = `${circumference}, ${circumference}`;
            circle.style.strokeDashoffset = `${circumference}`;

            let offset = circumference - progress / 100 * circumference;
            circle.style.strokeDashoffset = offset;

            let progress_num = progress_ring.querySelector('.progress-num');

            progress_num.textContent = progress;
        }
    }

    function toggleDropdowns(){
        $('.menu-item-has-children > a').click(function(){
            let link = $(this).parent('.menu-item-has-children');

            if ($(link).hasClass('active')) {
                $(link).removeClass('active')
            }else{
                $(link).addClass('active')
            }

        });
    }

    function modalExit(){
        $('.modal-exit').click(function(){
            let modal_container = $(this).parents('.modal-container');
            let modal = $(modal_container).find('.modal');
            $(modal).slideUp(250, function(){
                $(modal_container).fadeOut();
            })
        });

        $('.modal-container').click(function(event){
            if ($(event.target).hasClass('modal-container')) {
                let modal_container = $(this);
                let modal = $(modal_container).find('.modal');
                $(modal).slideUp(250, function(){
                    $(modal_container).fadeOut();
                })
            }
        });
    }

    function modalShow(){
        $('#classification-summary table tbody tr').click(function(){
            let modal_container = $('#classification-summary-modal');
            let modal = $(modal_container).find('.modal');
            $(modal_container).css('display','flex');
            $(modal).slideDown(250);
        });
        $('#experience-summary table tbody tr').click(function(){
            let modal_container = $('#experience-summary-modal');
            let modal = $(modal_container).find('.modal');
            $(modal_container).css('display','flex');
            $(modal).slideDown(250);
        });
    }

    function summaryOptionsToggle(){
        $('.summary .option').click(function(){
            let parent_container = $(this).parents('.summary');
            let options = $(this).parent('.options');
            let action =  $(this).attr('data-action');

            $(options).find('.option').removeClass('active');
            $(this).addClass('active');

            if (action == 'toggle-tables') {
                $(parent_container).find('.card .tables').css('display', 'flex');
                $(parent_container).find('.card .charts').css('display', 'none');
            }

            if (action == 'toggle-charts') {
                $(parent_container).find('.card .charts').css('display', 'flex');
                $(parent_container).find('.card .tables').css('display', 'none');
            }
        });
    }

    function progressBarsInit(){
        $('.progress-bar').each( function(){

            let completed_progress_bar = $(this).find('.progress[data-completed]');
            let suggested_progress = $(this).find('.progress[data-suggested]');

            let total = $(this).attr('data-total');
            let completed = $(completed_progress_bar).attr('data-completed');
            let suggested = $(suggested_progress).attr('data-suggested');

            let percent_completed =  Math.round(( completed / total ) * 100);
            let percent_suggested =  Math.round(( (suggested) / total ) * 100);

            $(completed_progress_bar).html('<p>'+ percent_completed + '% Completed</p>');

            $(completed_progress_bar).css('width', percent_completed + "%" );
            $(completed_progress_bar).append('<span class="progress-tooltip">You\'re here<br><strong>'+completed+' Completed</strong></span>');

            if (percent_suggested - percent_completed > 0 ) {
                $(suggested_progress).css('width', percent_suggested - percent_completed + "%" );
                $(suggested_progress).append('<span class="progress-tooltip">Suggested<br><strong>'+suggested+' Complete</strong></span>');
            }

            $(this).append('<span class="progress-tooltip">Total<br><strong>'+total+'</strong></span>');

         
        } );
    }

});