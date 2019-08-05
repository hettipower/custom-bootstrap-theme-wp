require.config({
    baseUrl: CUSTOM_PARAMS.theme_root+'/node_modules',
    paths: {
        'jquery' : 'jquery/dist/jquery.min',
        'bootstrap': 'bootstrap/dist/js/bootstrap.bundle.min',
        'mmenujs' : 'mmenu-js/src/mmenu.js'
    },
    shim: {
        'bootstrap': {
            deps: ['jquery' ]
        },
        'mmenujs': {
            deps: ['jquery' ]
        }
    }
});

require(['jquery' , 'bootstrap' , 'mmenujs'] , function($){
    $(function(){
        //jQuery Version
        console.log($().jquery);
    });
})