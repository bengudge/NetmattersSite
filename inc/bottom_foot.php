        <script> 
            // Sidebar is a work in progress    
            // const pushbar = new Pushbar({
            //     blur:true,
            //     overlay:true,
            // });

            $(function () {
                $('.sticky-smart-header').smartSticky({
                    show: {
                        delay: 30,
                        immediately: false,
                        original: {
                         under: true,
                         above: false
                        },
                        fixed: 'top',
                        scrolling: {
                          up: true,
                          down: false
                        }
                    },
                    container: false,
                    css: {
                        classes: {
                            placeholder: 'sticky-smart-placeholder',
                            root: 'sticky-smart',
                            invisible: 'sticky-smart-invisible',
                            active: 'sticky-smart-active',
                            background: 'sticky-smart-background',
                            container: 'sticky-smart-container'
                        },
                        fixed: {
                            width: false,
                            left: false
                        }
                    }
                });
            });

            /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginRight = "250px";
                document.getElementById("main").style.marginLeft = "-250px";
                document.getElementById("main").style.transition = "0.5s";
            }

            /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginRight = "0";
            }


            // Sidebar is a work in progress            
            // $(document).ready(function() {
            //     $("#sidebarCollapse").on('click',function() {
            //     $("#sidebar").toggleClass('active');
            //     });
            // });
    

            //const act = document.querySelector('.sticky-smart-active')
            //act.style.padding = 0;
        </script>
    </body>
</html>