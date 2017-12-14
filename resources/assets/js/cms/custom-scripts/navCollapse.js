$(document).ready(function() {
    $('.collapse').each(function () {
        let id = $(this);
        let opened = Helper.parseBool(localStorage.getItem(id[0].id));

        if(opened !== null) {
            if(!opened) {                
                $(this).removeClass('in');
            }
        }

    });

    $('.collapseAble').on('click', function() {
        setTimeout(() => {
            let element = $(this);
            let opened = _.indexOf(element[0].classList, 'collapsed');
            opened = (opened === -1) ? true : false;
            localStorage.setItem(element.data()['target'].replace('#', ''), opened)
        }, 0);
    });
});
    
    