        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script> 
            // Sidebar is a work in progress    
            // const pushbar = new Pushbar({
            //     blur:true,
            //     overlay:true,
            // });

            // $(function () {
            //     $('.sticky-smart-header').smartSticky({
            //         show: {
            //             delay: 30,
            //             immediately: false,
            //             original: {
            //              under: true,
            //              above: false
            //             },
            //             fixed: 'top',
            //             scrolling: {
            //               up: true,
            //               down: false
            //             }
            //         },
            //         container: false,
            //         css: {
            //             classes: {
            //                 placeholder: 'sticky-smart-placeholder',
            //                 root: 'sticky-smart',
            //                 invisible: 'sticky-smart-invisible',
            //                 active: 'sticky-smart-active',
            //                 background: 'sticky-smart-background',
            //                 container: 'sticky-smart-container'
            //             },
            //             fixed: {
            //                 width: false,
            //                 left: false
            //             }
            //         }
            //     });
            // });

            // // Track the previous scroll position
            // let prevScrollPos = window.pageYOffset;

            // // Function to toggle scroll header visibility based on scroll direction
            // function toggleScrollHeader() {
            //     const currentScrollPos = window.pageYOffset;
                
            //     if (prevScrollPos > currentScrollPos) {
            //         document.getElementById("fixed-header").classList.add("visible");
            //     } else {
            //         document.getElementById("fixed-header").classList.remove("visible");
            //     }
                
            //     prevScrollPos = currentScrollPos;
            // }

            var didScroll;
            var lastScrollTop = 0;
            var delta = 250;
            var navbarHeight = $('#top-header').outerHeight() + 50;

            $(window).scroll(function(event){
                didScroll = true;
            });

            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);

            function hasScrolled() {
                var st = $(this).scrollTop();
                
                // Make sure they scroll more than delta
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;
                
                // If they scrolled down and are past the navbar, add class .header-up.
                // This is necessary so you never see what is "behind" the navbar.
                if (st > lastScrollTop && st > navbarHeight){
                    // Scroll Down
                    // $('#fixed-header').css('height', '-250.56px')
                    $('header').removeClass('header-down').addClass('header-up');
                    console.log('header disappears');
                } else {
                    // Scroll Up
                    if(st + $(window).height() < $(document).height()) {
                        // $('#fixed-header').css('height', '250.56px');
                        $('header').removeClass('header-up').addClass('header-down');
                        console.log('header appears');
                    }
                }
                
                lastScrollTop = st;
            }
            /* Collections of open and close buttons for both headers*/
            var openButtons = document.getElementsByClassName("openbtn");
            var closeButtons = document.getElementsByClassName("closebtn");

            /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
            function openNav() {
                document.getElementById("mySidebar").style.width = "350px";
                document.getElementById("main").style.left = "-350px";
                
                for (let button of openButtons) { 
                    button.style.display = "none";
                }
                for (let button of closeButtons) { 
                    button.style.display = "inline-block";
                }
            }

            /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.left = "0";

                for (let button of openButtons) { 
                    button.style.display = "inline-block";
                }
                for (let button of closeButtons) { 
                    button.style.display = "none";
                }
            }


            // Sidebar is a work in progress            
            // $(document).ready(function() {
            //     $("#sidebarOpen").on('click',function() {
            //     $("#sidebar").toggleClass('active');
            //     });
            // });
    

            //const act = document.querySelector('.sticky-smart-active')
            //act.style.padding = 0;
        </script>
    </body>
</html>