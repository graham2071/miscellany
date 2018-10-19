$(document).ready(function() {
    window.initCategories = function() {
        $.each($('.form-tags'), function (index) {

            $(this).select2({
                tags: true,
                allowClear: true,
                minimumInputLength: 0,
                ajax: {
                    quietMillis: 200,
                    url: $(this).attr('data-url'),
                    dataType: 'json',
                    data: function (params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                createTag: function (params) {
                    var term = $.trim(params.term);

                    if (term === '') {
                        return null;
                    }

                    return {
                        id: term,
                        text: term,
                        newTag: true // add additional parameters
                    }
                },
                templateSelection : function (state) {
                    if (state.newTag) {
                        return $('<span class="new-tag" title="' + $('#tags').data('new-tag') + '">' + state.text + ' <i class="fa fa-plus-circle"></i></span>');
                    }
                    return state.text;
                },
            });
        });
    };

    window.initCategories();
});