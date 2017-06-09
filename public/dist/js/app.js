// document.addEventListener('DOMContentLoaded',() => {
//     const wrapperElement = document.querySelector('.l-wrapper');
//     /*
//      * Common
//      * --- Fixed Navigation Bar
//      */
//     const gnav    = document.querySelector('.l-header__lower');
//     const headerH = document.querySelector('.l-header').clientHeight;

//     const fixed_nav_bar = () => {

//         if(window.scrollY > headerH){
//             gnav.classList.add('is-fixed');
//             $(gnav).animate({"top" : "0"},'slow');
//         }else{
//             gnav.classList.remove('is-fixed');
//         }

//     }

//     document.addEventListener('scroll',fixed_nav_bar,false);


//     /*
//      * Ranking
//      * --- Rating
//      */
//     if(wrapperElement.id === 'p-ranking' || wrapperElement.id === 'p-detail'){
//         $('.ui.rating').rating('disable');
//     }


//     /*
//      * Search
//      * --- Stuck content
//      */

//     if(wrapperElement.id === 'p-search'){
//         const stuck = $('.c-searchSidePanel');
//         let stuckOffset = stuck.offset().top;

//         $(window).on('scroll resize',function(){
//             // sicky menu
//             let st = $(this).scrollTop();

//             if(st > stuckOffset && window.innerWidth < 960){
//                 stuck.css({'position':'static','width':'100%'});
//             }else if(st > stuckOffset){
//                 if(window.innerWidth >= 960){
//                     stuck.css({'position':'fixed','top': gnav.clientHeight + 10 + 'px','width':'333px'});
//                 }else{
//                     stuck.css({'position':'static','width':'100%'});
//                 }
//             }else if(st < stuckOffset){
//                 stuck.css({'position':'static','width':'100%'});
//             }
//         });
//     }

//     /*
//      * Search
//      * --- modal
//      */

//     if(wrapperElement.id === 'p-search'){
//         document.querySelector('.ui.button.c-jobmodal').addEventListener('click',() => {
//             $('.ui.modal.job').modal('show');
//         });

//         document.querySelector('.ui.button.c-areamodal').addEventListener('click',() => {
//             $('.ui.modal.area').modal('show');
//         });

//         if(navigator.userAgent.indexOf('iPhone') > -1 || navigator.userAgent.indexOf('Android') > -1){
//             $('.c-searchModal__tableHead tr th').attr('data-toggle','hidden');
//         }

//         window.onresize = function(){
//             if(window.innerWidth <= 679){
//                 $('.c-searchModal__tableHead tr th').attr('data-toggle','hidden')
//             }else{
//                 $('.c-searchModal__tableHead tr th').attr('data-toggle','show')
//             }
//         }

//         $('.c-searchModal__tableHead').on('click',function(event){

//             let currentStatus = event.target.getAttribute('data-toggle');
//             if(currentStatus == "show"){
//                 event.target.setAttribute('data-toggle', "hidden");
//                 $(this).next().hide('slow');
//             }else{
//                 event.target.setAttribute('data-toggle', "show");
//                 $(this).next().show('slow');
//             }
//         });


//         if(location.search.indexOf('?') == 0){
//             let presetJobList  = [];
//             let presetAreaList = [];
//             let presetKeyword  = "";
//             let params = location.search.substr(1);

//             params = params.split('&');

//             for(var i = 0; i < params.length; i++){
//                 if(params[i].indexOf('jc') > -1){
//                     presetJobList.push(params[i].replace('jc=',''));
//                 }
//                 if(params[i].indexOf('ac') > -1){
//                     presetAreaList.push(params[i].replace('ac=',''));
//                 }
//                 if(params[i].indexOf('keyword') > -1){
//                     presetKeyword = decodeURIComponent(params[i].replace('keyword=',''));
//                 }
//             }

//             for(let i = 0; i < presetJobList.length; i++){
//                 var div = document.createElement('div');

//                 var $input     = document.createElement('input');
//                 $input.type    = "checkbox";
//                 $input.checked = "checked";
//                 $input.id      = "ch_c_" + presetJobList[i];
//                 $input.name    = "ch_c_" + presetJobList[i];

//                 if(i >= 5){
//                     $input.style.display = "none";
//                 }

//                 div.appendChild($input);

//                 var $label         = document.createElement('label');
//                 $label.htmlFor     = "ch_c_" + presetJobList[i];
//                 $variable          = '.ui.job.modal label[for="c_' + presetJobList[i] + '"]';
//                 $label.textContent = document.querySelector($variable).textContent;

//                 if(i >= 5){
//                     $label.style.display = "none";
//                 }

//                 div.appendChild($label);

//                 document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist').appendChild(div);
//             }

//             if(document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist').childElementCount >= 5){
//                 var excerpt = document.createElement('div');
//                 excerpt.textContent = "他";
//                 document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist').appendChild(excerpt);
//             }

//             for(let i = 0; i < presetAreaList.length; i++){
//                 var div = document.createElement('div');

//                 var $input     = document.createElement('input');
//                 $input.type    = "checkbox";
//                 $input.checked = "checked";
//                 $input.id      = "ch_a_" + presetAreaList[i];
//                 $input.name    = "ch_a_" + presetAreaList[i];

//                 if(i >= 5){
//                     $input.style.display == "none";
//                 }

//                 div.appendChild($input);

//                 var $label         = document.createElement('label');
//                 $label.htmlFor     = "ch_a_" + presetAreaList[i];
//                 $variable          = '.ui.area.modal label[for=a_' + presetAreaList[i] + ']';
//                 $label.textContent = document.querySelector($variable).textContent;

//                 if(i >= 5){
//                     $label.style.display == "none";
//                 }

//                 div.appendChild($label);

//                 document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist').appendChild(div);
//             }

//             if(document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist').childElementCount >= 5){
//                 var excerpt = document.createElement('div');
//                 excerpt.textContent = "他";
//                 document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist').appendChild(excerpt);
//             }

//             if(presetKeyword.length > 0){
//                 document.querySelector('input[name="keyword"]').value = presetKeyword;
//             }
//         }

//         document.querySelector('[data-button-type="job_register"]').addEventListener('click',() => {
//             let checkedList = document.querySelectorAll('.ui.job.modal input.c-searchModal__eachinput:checked');
//             let labelList   = document.querySelectorAll('.ui.job.modal input.c-searchModal__eachinput:checked + label')
//             let targetNode  = document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist');

//             while(targetNode.childElementCount > 0){
//                 targetNode.removeChild(targetNode.firstElementChild);
//             }
//             for(let i = 0; i < checkedList.length; i++){
//                 var div = document.createElement('div');

//                 var $input = checkedList[i].cloneNode(true);
//                 $input.id = "ch_" + $input.id;
//                 $input.name = "ch_" + $input.name;

//                 if(i >= 5){
//                     $input.style.display = "none";
//                 }

//                 div.appendChild($input)

//                 var $label = labelList[i].cloneNode(true);
//                 $label.htmlFor = "ch_" + $label.htmlFor;

//                 if(i >= 5){
//                     $label.style.display = "none";
//                 }

//                 div.appendChild($label);

//                 targetNode.appendChild(div);
//             }

//             if(targetNode.childElementCount >= 5){
//                 var excerpt = document.createElement('div');
//                 excerpt.textContent = "他";
//                 targetNode.appendChild(excerpt);
//             }

//         });

//         for(var elem of document.querySelectorAll('.c-searchModal__allcheck')){
//             elem.addEventListener('click',(event) => {
//                 checkBigcatAll(event.target.id);
//             });
//         }


//         function checkBigcatAll(id){
//             let inputList = document.querySelectorAll('.ui.job.modal input');
//             let targetList = [];

//             for(var input of inputList){
//                 if(input.id.match(id)){
//                     targetList.push(input);
//                 }
//             }

//             for(var input of targetList){
//                 if(input.className == "c-searchModal__eachinput"){
//                     input.checked = !input.checked;
//                 }
//             }
//         }

//         document.querySelector('[data-button-type="job_clear"]').addEventListener('click',() => {
//             let onModalList = document.querySelectorAll('.ui.job.modal input:checked');
//             let onDomList = document.querySelectorAll('.ui.button.c-jobmodal + .c-searchPanel__selectedlist input:checked');
//             for(let i = 0; i < onModalList.length; i++){
//                 onModalList[i].checked = false;
//             }
//             for(let i = 0; i < onDomList.length; i++){
//                 onDomList[i].checked   = false;
//             }
//             $('.ui.job.modal').modal('hide');
//         });

//         document.querySelector('[data-button-type="area_register"]').addEventListener('click',() => {
//             let checkedList = document.querySelectorAll('.ui.area.modal input:checked');
//             let labelList   = document.querySelectorAll('.ui.area.modal input:checked + label')
//             let targetNode  = document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist');

//             while(targetNode.childElementCount > 0){
//                 targetNode.removeChild(targetNode.firstElementChild);
//             }
//             for(let i = 0; i < checkedList.length; i++){
//                 var div = document.createElement('div');

//                 var $input = checkedList[i].cloneNode(true);
//                 $input.id = "ch_" + $input.id;
//                 $input.name = "ch_" + $input.name;

//                 if(i >= 5){
//                     $input.style.display = "none";
//                 }

//                 div.appendChild($input)

//                 var $label = labelList[i].cloneNode(true);
//                 $label.htmlFor = "ch_" + $label.htmlFor;

//                 if(i >= 5){
//                     $label.style.display = "none";
//                 }

//                 div.appendChild($label)

//                 targetNode.appendChild(div);
//             }

//             if(targetNode.childElementCount >= 5){
//                 var excerpt = document.createElement('div');
//                 excerpt.textContent = "他";
//                 targetNode.appendChild(excerpt);
//             }

//         });

//         document.querySelector('[data-button-type="area_clear"]').addEventListener('click',() => {
//             let onModalList = document.querySelectorAll('.ui.area.modal input:checked');
//             let onDomList = document.querySelectorAll('.ui.button.c-areamodal + .c-searchPanel__selectedlist input:checked');
//             for(let i = 0; i < onModalList.length; i++){
//                 onModalList[i].checked = false;
//             }
//             for(let i = 0; i < onDomList.length; i++){
//                 onDomList[i].checked   = false;
//             }
//             $('.ui.area.modal').modal('hide');
//         });

//         document.querySelector('[data-button-type="all_clear"]').addEventListener('click',() => {
//             let checkedList = document.querySelectorAll('.c-searchPanel__selectedlist input:checked');
//             for(let i = 0; i < checkedList.length; i++){
//                 checkedList[i].checked = false;
//             }
//         });

//         document.querySelector('[data-button-type="submit"]').addEventListener('click',() => {
//             let formuri     = document.forms['search'].action + '?';
//             let job_code_f  = false;
//             let area_code_f = false;
//             let selectJobList = document.querySelectorAll('.ui.button.c-jobmodal + .c-searchPanel__selectedlist input:checked');
//             let selectAreaList = document.querySelectorAll('.ui.button.c-areamodal + .c-searchPanel__selectedlist input:checked');
//             let keyword     = document.querySelector('input[name="keyword"]').value;


//             if(selectJobList.length > 0){
//                 for(var i = 0; i < selectJobList.length; i++){
//                     formuri += 'jc=' + selectJobList[i].name.replace(/ch_c_/,'');
//                     if(i !== selectJobList.length - 1){
//                         formuri += '&';
//                     }
//                 }
//                 job_code_f = true;
//             }


//             if(selectAreaList.length > 0){
//                 if(job_code_f){
//                     formuri += '&';
//                 }
//                 let selectAreaList = document.querySelectorAll('.ui.button.c-areamodal + .c-searchPanel__selectedlist input:checked');
//                 for(var i = 0; i < selectAreaList.length; i++){
//                     formuri += 'ac=' + selectAreaList[i].name.replace(/ch_a_/,'');
//                     if(i !== selectAreaList.length - 1){
//                         formuri += '&';
//                     }
//                 }
//                 area_code_f = true;
//             }

//             if(keyword.length > 0){
//                 if(job_code_f === false && area_code_f === false){
//                     formuri += 'keyword=' + keyword;
//                 }else if(job_code_f === true || area_code_f === true){
//                     formuri += '&keyword=' + keyword;
//                 }
//             }

//             document.forms['search'].action = formuri;
//             document.forms['search'].submit();
//         });


//     }


//     if(wrapperElement.id === "p-search"){
//         const $el         = $('<div class="c-changeCondition is-hidden"><button class="ui basic button"><i class="icon configure"></i>条件を変更</button></div>');
//         const $target     = $('.l-main_lf_2');
//         const breakPoint  = window.scrollY + document.querySelector('.l-main_lf_2').getBoundingClientRect().top;

//         $target.append($el);

//         $(window).on('scroll',function(){
//             if($(this).scrollTop() > breakPoint && window.innerWidth < 678){
//                 $el.removeClass('is-hidden');
//               }else{
//                 $el.addClass('is-hidden');
//             }
//         });

//         $el.on('click',function(e){
//             e.stopPropagation();
//             $('html,body').animate({ scrollTop : 0});
//         });
//     }


//     /*
//      * Jobdetail
//      * --- stuck button
//      */

//     if(wrapperElement.id === 'p-jobinfo'){
//         const el          = document.querySelector('.c-detail__content');
//         const stuckParent = document.querySelector('.c-detail__sticky');
//         const stuckTarget = document.querySelector('.c-detail__sticky .c-single__button');

//         $(window).on('scroll',function(){
//             let endPointSp   = $(el).offset().top + $(el).height();
//             let startPointPc = $(el).offset().top;
//             let endPointPc   = ($(el).offset().top + el.clientHeight) - (stuckTarget.clientHeight + gnav.clientHeight + 20);
//             let st           = window.scrollY;
//             let sb           = window.scrollY + window.innerHeight;

//             if(window.innerWidth <= 679){
//                 if(sb < endPointSp){
//                     stuckParent.classList.add('is-stack-sp');
//                     stuckTarget.classList.add('is-stack-sp');
//                 }else{
//                     stuckParent.classList.remove('is-stack-sp');
//                     stuckTarget.classList.remove('is-stack-sp');
//                 }
//             }else if(window.innerWidth >= 680){
//                 if(st > startPointPc && st < endPointPc){
//                     stuckParent.style.position = 'relative';
//                     stuckTarget.style.position = 'fixed';
//                     stuckTarget.style.top      = (gnav.clientHeight + 10) + 'px';
//                     stuckTarget.style.width    = stuckParent.clientWidth - parseInt(window.getComputedStyle(stuckParent).paddingLeft) * 2 + 'px';
//                 }else{
//                     stuckTarget.style.position = 'static';
//                 }
//             }
//         });

//         $(window).on('resize', function(){
//             if(window.innerWidth >= 680 && stuckTarget.classList.contains('is-stack-sp')){
//                 stuckParent.classList.remove('is-stack-sp');
//                 stuckTarget.classList.remove('is-stack-sp');
//             }
//             if(window.innerWidth <= 679){
//                 stuckParent.classList.add('is-stack-sp');
//                 stuckTarget.classList.add('is-stack-sp');
//             }
//         });
//     }

// },false);


'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var wrapperElement = document.querySelector('.l-wrapper');
    /*
     * Common
     * --- Fixed Navigation Bar
     */
    var gnav = document.querySelector('.l-header__lower');
    var headerH = document.querySelector('.l-header').clientHeight;

    var fixed_nav_bar = function fixed_nav_bar() {

        if (window.scrollY > headerH) {
            gnav.classList.add('is-fixed');
            $(gnav).animate({ "top": "0" }, 'slow');
        } else {
            gnav.classList.remove('is-fixed');
        }
    };

    document.addEventListener('scroll', fixed_nav_bar, false);

    /*
     * Ranking
     * --- Rating
     */
    if (wrapperElement.id === 'p-ranking' || wrapperElement.id === 'p-detail') {
        $('.ui.rating').rating('disable');
    }

    /*
     * Search
     * --- Stuck content
     */

    if (wrapperElement.id === 'p-search') {
        var stuck = $('.c-searchSidePanel');
        var stuckOffset = stuck.offset().top;

        $(window).on('scroll resize', function () {
            // sicky menu
            var st = $(this).scrollTop();

            if (st > stuckOffset && window.innerWidth < 960) {
                stuck.css({ 'position': 'static', 'width': '100%' });
            } else if (st > stuckOffset) {
                if (window.innerWidth >= 960) {
                    stuck.css({ 'position': 'fixed', 'top': gnav.clientHeight + 10 + 'px', 'width': '333px' });
                } else {
                    stuck.css({ 'position': 'static', 'width': '100%' });
                }
            } else if (st < stuckOffset) {
                stuck.css({ 'position': 'static', 'width': '100%' });
            }
        });
    }

    /*
     * Search
     * --- modal
     */

    if (wrapperElement.id === 'p-search') {
        var i;
        var div;
        var $input;
        var $label;
        var excerpt;
        var div;
        var $input;
        var $label;
        var excerpt;
        var elem;

        (function () {
            var checkBigcatAll = function checkBigcatAll(id) {
                var inputList = document.querySelectorAll('.ui.job.modal input');
                var targetList = [];

                var _iteratorNormalCompletion2 = true;
                var _didIteratorError2 = false;
                var _iteratorError2 = undefined;

                try {
                    for (var _iterator2 = inputList[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
                        var input = _step2.value;

                        if (input.id.match(id)) {
                            targetList.push(input);
                        }
                    }
                } catch (err) {
                    _didIteratorError2 = true;
                    _iteratorError2 = err;
                } finally {
                    try {
                        if (!_iteratorNormalCompletion2 && _iterator2.return) {
                            _iterator2.return();
                        }
                    } finally {
                        if (_didIteratorError2) {
                            throw _iteratorError2;
                        }
                    }
                }

                var _iteratorNormalCompletion3 = true;
                var _didIteratorError3 = false;
                var _iteratorError3 = undefined;

                try {
                    for (var _iterator3 = targetList[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
                        var input = _step3.value;

                        if (input.className == "c-searchModal__eachinput") {
                            input.checked = !input.checked;
                        }
                    }
                } catch (err) {
                    _didIteratorError3 = true;
                    _iteratorError3 = err;
                } finally {
                    try {
                        if (!_iteratorNormalCompletion3 && _iterator3.return) {
                            _iterator3.return();
                        }
                    } finally {
                        if (_didIteratorError3) {
                            throw _iteratorError3;
                        }
                    }
                }
            };

            document.querySelector('.ui.button.c-jobmodal').addEventListener('click', function () {
                $('.ui.modal.job').modal('show');
            });

            document.querySelector('.ui.button.c-areamodal').addEventListener('click', function () {
                $('.ui.modal.area').modal('show');
            });

            if (navigator.userAgent.indexOf('iPhone') > -1 || navigator.userAgent.indexOf('Android') > -1) {
                $('.c-searchModal__tableHead tr th').attr('data-toggle', 'hidden');
            }

            window.onresize = function () {
                if (window.innerWidth <= 679) {
                    $('.c-searchModal__tableHead tr th').attr('data-toggle', 'hidden');
                } else {
                    $('.c-searchModal__tableHead tr th').attr('data-toggle', 'show');
                }
            };

            $('.c-searchModal__tableHead').on('click', function (event) {

                var currentStatus = event.target.getAttribute('data-toggle');
                if (currentStatus == "show") {
                    event.target.setAttribute('data-toggle', "hidden");
                    $(this).next().hide('slow');
                } else {
                    event.target.setAttribute('data-toggle', "show");
                    $(this).next().show('slow');
                }
            });

            if (location.search.indexOf('?') == 0) {
                var presetJobList = [];
                var presetAreaList = [];
                var presetKeyword = "";
                var params = location.search.substr(1);

                params = params.split('&');

                for (i = 0; i < params.length; i++) {
                    if (params[i].indexOf('jc') > -1) {
                        presetJobList.push(params[i].replace('jc=', ''));
                    }
                    if (params[i].indexOf('ac') > -1) {
                        presetAreaList.push(params[i].replace('ac=', ''));
                    }
                    if (params[i].indexOf('keyword') > -1) {
                        presetKeyword = decodeURIComponent(params[i].replace('keyword=', ''));
                    }
                }

                for (var _i = 0; _i < presetJobList.length; _i++) {
                    div = document.createElement('div');
                    $input = document.createElement('input');

                    $input.type = "checkbox";
                    $input.checked = "checked";
                    $input.id = "ch_c_" + presetJobList[_i];
                    $input.name = "ch_c_" + presetJobList[_i];

                    if (_i >= 5) {
                        $input.style.display = "none";
                    }

                    div.appendChild($input);

                    $label = document.createElement('label');

                    $label.htmlFor = "ch_c_" + presetJobList[_i];
                    $variable = '.ui.job.modal label[for="c_' + presetJobList[_i] + '"]';
                    $label.textContent = document.querySelector($variable).textContent;

                    if (_i >= 5) {
                        $label.style.display = "none";
                    }

                    div.appendChild($label);

                    document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist').appendChild(div);
                }

                if (document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist').childElementCount >= 5) {
                    excerpt = document.createElement('div');

                    excerpt.textContent = "他";
                    document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist').appendChild(excerpt);
                }

                for (var _i2 = 0; _i2 < presetAreaList.length; _i2++) {
                    div = document.createElement('div');
                    $input = document.createElement('input');

                    $input.type = "checkbox";
                    $input.checked = "checked";
                    $input.id = "ch_a_" + presetAreaList[_i2];
                    $input.name = "ch_a_" + presetAreaList[_i2];

                    if (_i2 >= 5) {
                        $input.style.display == "none";
                    }

                    div.appendChild($input);

                    $label = document.createElement('label');

                    $label.htmlFor = "ch_a_" + presetAreaList[_i2];
                    $variable = '.ui.area.modal label[for=a_' + presetAreaList[_i2] + ']';
                    $label.textContent = document.querySelector($variable).textContent;

                    if (_i2 >= 5) {
                        $label.style.display == "none";
                    }

                    div.appendChild($label);

                    document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist').appendChild(div);
                }

                if (document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist').childElementCount >= 5) {
                    excerpt = document.createElement('div');

                    excerpt.textContent = "他";
                    document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist').appendChild(excerpt);
                }

                if (presetKeyword.length > 0) {
                    document.querySelector('input[name="keyword"]').value = presetKeyword;
                }
            }

            document.querySelector('[data-button-type="job_register"]').addEventListener('click', function () {
                var checkedList = document.querySelectorAll('.ui.job.modal input.c-searchModal__eachinput:checked');
                var labelList = document.querySelectorAll('.ui.job.modal input.c-searchModal__eachinput:checked + label');
                var targetNode = document.querySelector('.ui.button.c-jobmodal + .c-searchPanel__selectedlist');

                while (targetNode.childElementCount > 0) {
                    targetNode.removeChild(targetNode.firstElementChild);
                }
                for (var _i3 = 0; _i3 < checkedList.length; _i3++) {
                    var div = document.createElement('div');

                    var $input = checkedList[_i3].cloneNode(true);
                    $input.id = "ch_" + $input.id;
                    $input.name = "ch_" + $input.name;

                    if (_i3 >= 5) {
                        $input.style.display = "none";
                    }

                    div.appendChild($input);

                    var $label = labelList[_i3].cloneNode(true);
                    $label.htmlFor = "ch_" + $label.htmlFor;

                    if (_i3 >= 5) {
                        $label.style.display = "none";
                    }

                    div.appendChild($label);

                    targetNode.appendChild(div);
                }

                if (targetNode.childElementCount >= 5) {
                    var excerpt = document.createElement('div');
                    excerpt.textContent = "他";
                    targetNode.appendChild(excerpt);
                }
            });

            var _iteratorNormalCompletion = true;
            var _didIteratorError = false;
            var _iteratorError = undefined;

            try {
                for (var _iterator = document.querySelectorAll('.c-searchModal__allcheck')[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                    elem = _step.value;

                    elem.addEventListener('click', function (event) {
                        checkBigcatAll(event.target.id);
                    });
                }
            } catch (err) {
                _didIteratorError = true;
                _iteratorError = err;
            } finally {
                try {
                    if (!_iteratorNormalCompletion && _iterator.return) {
                        _iterator.return();
                    }
                } finally {
                    if (_didIteratorError) {
                        throw _iteratorError;
                    }
                }
            }

            document.querySelector('[data-button-type="job_clear"]').addEventListener('click', function () {
                var onModalList = document.querySelectorAll('.ui.job.modal input:checked');
                var onDomList = document.querySelectorAll('.ui.button.c-jobmodal + .c-searchPanel__selectedlist input:checked');
                for (var _i4 = 0; _i4 < onModalList.length; _i4++) {
                    onModalList[_i4].checked = false;
                }
                for (var _i5 = 0; _i5 < onDomList.length; _i5++) {
                    onDomList[_i5].checked = false;
                }
                $('.ui.job.modal').modal('hide');
            });

            document.querySelector('[data-button-type="area_register"]').addEventListener('click', function () {
                var checkedList = document.querySelectorAll('.ui.area.modal input:checked');
                var labelList = document.querySelectorAll('.ui.area.modal input:checked + label');
                var targetNode = document.querySelector('.ui.button.c-areamodal + .c-searchPanel__selectedlist');

                while (targetNode.childElementCount > 0) {
                    targetNode.removeChild(targetNode.firstElementChild);
                }
                for (var _i6 = 0; _i6 < checkedList.length; _i6++) {
                    var div = document.createElement('div');

                    var $input = checkedList[_i6].cloneNode(true);
                    $input.id = "ch_" + $input.id;
                    $input.name = "ch_" + $input.name;

                    if (_i6 >= 5) {
                        $input.style.display = "none";
                    }

                    div.appendChild($input);

                    var $label = labelList[_i6].cloneNode(true);
                    $label.htmlFor = "ch_" + $label.htmlFor;

                    if (_i6 >= 5) {
                        $label.style.display = "none";
                    }

                    div.appendChild($label);

                    targetNode.appendChild(div);
                }

                if (targetNode.childElementCount >= 5) {
                    var excerpt = document.createElement('div');
                    excerpt.textContent = "他";
                    targetNode.appendChild(excerpt);
                }
            });

            document.querySelector('[data-button-type="area_clear"]').addEventListener('click', function () {
                var onModalList = document.querySelectorAll('.ui.area.modal input:checked');
                var onDomList = document.querySelectorAll('.ui.button.c-areamodal + .c-searchPanel__selectedlist input:checked');
                for (var _i7 = 0; _i7 < onModalList.length; _i7++) {
                    onModalList[_i7].checked = false;
                }
                for (var _i8 = 0; _i8 < onDomList.length; _i8++) {
                    onDomList[_i8].checked = false;
                }
                $('.ui.area.modal').modal('hide');
            });

            document.querySelector('[data-button-type="all_clear"]').addEventListener('click', function () {
                var checkedList = document.querySelectorAll('.c-searchPanel__selectedlist input:checked');
                for (var _i9 = 0; _i9 < checkedList.length; _i9++) {
                    checkedList[_i9].checked = false;
                }
            });

            document.querySelector('[data-button-type="submit"]').addEventListener('click', function () {
                var formuri = document.forms['search'].action + '?';
                var job_code_f = false;
                var area_code_f = false;
                var selectJobList = document.querySelectorAll('.ui.button.c-jobmodal + .c-searchPanel__selectedlist input:checked');
                var selectAreaList = document.querySelectorAll('.ui.button.c-areamodal + .c-searchPanel__selectedlist input:checked');
                var keyword = document.querySelector('input[name="keyword"]').value;

                if (selectJobList.length > 0) {
                    for (var i = 0; i < selectJobList.length; i++) {
                        formuri += 'jc=' + selectJobList[i].name.replace(/ch_c_/, '');
                        if (i !== selectJobList.length - 1) {
                            formuri += '&';
                        }
                    }
                    job_code_f = true;
                }

                if (selectAreaList.length > 0) {
                    if (job_code_f) {
                        formuri += '&';
                    }
                    var _selectAreaList = document.querySelectorAll('.ui.button.c-areamodal + .c-searchPanel__selectedlist input:checked');
                    for (var i = 0; i < _selectAreaList.length; i++) {
                        formuri += 'ac=' + _selectAreaList[i].name.replace(/ch_a_/, '');
                        if (i !== _selectAreaList.length - 1) {
                            formuri += '&';
                        }
                    }
                    area_code_f = true;
                }

                if (keyword.length > 0) {
                    if (job_code_f === false && area_code_f === false) {
                        formuri += 'keyword=' + keyword;
                    } else if (job_code_f === true || area_code_f === true) {
                        formuri += '&keyword=' + keyword;
                    }
                }

                document.forms['search'].action = formuri;
                document.forms['search'].submit();
            });
        })();
    }

    if (wrapperElement.id === "p-search") {
        var $el = $('<div class="c-changeCondition is-hidden"><button class="ui basic button"><i class="icon configure"></i>条件を変更</button></div>');
        var $target = $('.l-main_lf_2');
        var breakPoint = window.scrollY + document.querySelector('.l-main_lf_2').getBoundingClientRect().top;

        $target.append($el);

        $(window).on('scroll', function () {
            if ($(this).scrollTop() > breakPoint && window.innerWidth < 678) {
                $el.removeClass('is-hidden');
            } else {
                $el.addClass('is-hidden');
            }
        });

        $el.on('click', function (e) {
            e.stopPropagation();
            $('html,body').animate({ scrollTop: 0 });
        });
    }

    /*
     * Jobdetail
     * --- stuck button
     */

    if (wrapperElement.id === 'p-jobinfo') {
        var el = document.querySelector('.c-detail__content');
        var stuckParent = document.querySelector('.c-detail__sticky');
        var stuckTarget = document.querySelector('.c-detail__sticky .c-single__button');

        $(window).on('scroll', function () {
            var endPointSp = $(el).offset().top + $(el).height();
            var startPointPc = $(el).offset().top;
            var endPointPc = $(el).offset().top + el.clientHeight - (stuckTarget.clientHeight + gnav.clientHeight + 20);
            var st = window.scrollY;
            var sb = window.scrollY + window.innerHeight;

            if (window.innerWidth <= 679) {
                if (sb < endPointSp) {
                    stuckParent.classList.add('is-stack-sp');
                    stuckTarget.classList.add('is-stack-sp');
                } else {
                    stuckParent.classList.remove('is-stack-sp');
                    stuckTarget.classList.remove('is-stack-sp');
                }
            } else if (window.innerWidth >= 680) {
                if (st > startPointPc && st < endPointPc) {
                    stuckParent.style.position = 'relative';
                    stuckTarget.style.position = 'fixed';
                    stuckTarget.style.top = gnav.clientHeight + 10 + 'px';
                    stuckTarget.style.width = stuckParent.clientWidth - parseInt(window.getComputedStyle(stuckParent).paddingLeft) * 2 + 'px';
                } else {
                    stuckTarget.style.position = 'static';
                }
            }
        });

        $(window).on('resize', function () {
            if (window.innerWidth >= 680 && stuckTarget.classList.contains('is-stack-sp')) {
                stuckParent.classList.remove('is-stack-sp');
                stuckTarget.classList.remove('is-stack-sp');
            }
            if (window.innerWidth <= 679) {
                stuckParent.classList.add('is-stack-sp');
                stuckTarget.classList.add('is-stack-sp');
            }
        });
    }
}, false);