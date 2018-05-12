


new Vue({
    el: '#meals-list',
    data: {
        menus: [],
        items: [],
        menu_days: [],
        name_days:[],
        current_day: 0,
        current_menu: 0,
    },
    created(){
        axios.get('/menu/start-menu-json')
            .then((response)=>{
                this.menus = response.data.list_menus;
                this.items = response.data.list_meals;
                this.menu_days = response.data.list_menu_days;
                this.name_days = response.data.list_days_names;
                this.current_menu = response.data.current_menu;
                this.current_day = response.data.current_day;
            });
    },
    methods: {
        clickBtn: function (e) {
            var menu_id = e.target.attributes[0].nodeValue;
            var day_id = e.target.attributes[1].nodeValue;

            axios.get('/menu/meals-list-json/' + menu_id + '/' + day_id)
                .then((response)=>{
                    this.items = response.data;
                });

            /*--- add class active to button ---*/
            var current_active = document.querySelector(".day-button .active");
            current_active.classList.remove("active");
            e.target.classList.add("active");
            /*----------------------------------*/
        },
        clickMenuBtn: function (e) {
            var menu_id = e.target.attributes[0].nodeValue;

            axios.get('/menu/select-menu-json/' + menu_id)
                .then((response)=>{
                    this.menus = response.data.list_menus;
                    this.items = response.data.list_meals;
                    this.menu_days = response.data.list_menu_days;
                    this.name_days = response.data.list_days_names;
                    this.current_menu = response.data.current_menu;
                    this.current_day = response.data.current_day;
                });

            var current_active_day = document.querySelector(".day-button .active");
            current_active_day.classList.remove("active");
            var new_active_day = document.querySelector('.day-button [attr-day="'+this.current_day+'"]');
            new_active_day.classList.add("active");


            /*--- add class active to button ---*/
            var current_active_menu = document.querySelector(".menu .active");
            current_active_menu.classList.remove("active");
            e.target.classList.add("active");
            /*----------------------------------*/
        },
    }
});