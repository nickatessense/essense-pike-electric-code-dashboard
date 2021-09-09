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

            console.log(  $(this).parents('#mobile-nav') );

            $(this).parents('#mobile-nav').addClass('active');
            $('#main-sidebar').css('width', '300px');
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

});