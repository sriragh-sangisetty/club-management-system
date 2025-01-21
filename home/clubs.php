<?php
include '../dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Our clubs</title>
    <link rel="icon" href="../images/sitelogo.png" />
</head>
<body>
    <div class="navbarheader animate__animated animate__fadeInDown">
        <div class="flex justify-center ">
            <div class="self-center top-0 w-full max-w-7xl ">
                <div class="flex justify-between items-center text-gray-700">
                    <div class="mx-2 my-4 ">
                      <div class=" md:w-1/6 overflow-hidden ">
                        <img src="../images/aiet-logo.png" alt="" class="" />
                      </div>
                    </div>
                    <ul class="hidden md:flex items-center text-[18px] font-semibold pr-10">
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.php">Home</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="../dashboard/dashboard.php">
                                dashboard</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Our
                                Clubs</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="notice.php">Notices</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="contact.php">Contact</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                          href="../index.php">Sign out</a></li>
                        <!-- <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> -->
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group">
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-[60%] border bg-white group-focus:right-0 group-focus:opacity-100 transition-all ease-in duration-300 ">
                            <ul class="flex flex-col items-center text-[18px] pt-[60px]">
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">About Us</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Our Services</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Portfolio</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Contact</a></li>
                                <!-- <li
                                    class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                                    <a href="#">LogIn</a></li>
                                <li
                                    class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                                    <a href="#">SignUp</a></li> -->
                            </ul>
                        </div>
                    </button>
                </div>
                
            </div>
           </div>
           <script src="https://cdn.tailwindcss.com"></script>
           <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
           <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="../images/aiet-logo.png"></script> 
    </div>

    <div class="clubs">
    <div class="flex justify-center ">
        <div class="flex flex-col justify-center items-center bg-slate-100 max-w-7xl">
            <div class="text-3xl text-green-600 font-bold mt-4 "><h2>OUR CLUBS</h2></div>
            <div class="text-2xl text-black font-bold mt-2 "> Enhance your college experience</div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase" ><a href="../ourclubs/Rostrum.php">1. GeneticX</a> </h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> GeneticX is the pulsating heartbeat of dance enthusiasts at IIITA Allahabad. Established with a mission to nurture talent, promote creativity, and foster a vibrant dance culture, GeneticX is where rhythm meets expression, and passion finds its rhythm.                                              </p>
                    <img src="../images/Rostrum.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/Srishti.php"> 2. Virtuosi – Musical Club</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">"Virtuosi" at IIITA Allahabad is a vibrant community of passionate musicians, dedicated to fostering creativity, collaboration, and musical excellence among its members. As one of the premier cultural clubs under the Student Activity Center (SAC), Virtuosi provides a platform for students with a love for music to come together, share their talents, and create memorable musical experiences.</p>
                    <img src="../images/srishti.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/edwins.php"> 3. AMS</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> "AMS" - Artistic Moments Society is the vibrant hub for photography enthusiasts within the campus of IIITA (Indian Institute of Information Technology, Allahabad). AMS aims to foster a community of individuals passionate about capturing the world through lenses, exploring the intricacies of photography, and unleashing creativity.</p>
                    <img src="../images/edwins.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase  animate__animated animate__flipInY "><a href="../ourclubs/algori.php"> 4. Nirmiti</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">"Nirmiti" is the vibrant hub within the campus of Indian Institute of Information Technology, Allahabad (IIITA), dedicated to nurturing creativity and fostering artistic expression. As a haven for enthusiasts of all skill levels, Nirmiti welcomes students who have a passion for various forms of art and craft, ranging from painting and sketching to pottery and origami.
                    </p>
                    <img src="../images/algori.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase  animate__animated animate__flipInY "><a href="../ourclubs/Apple.php">5. Technical Club</a> </h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The IIITA Tech Club is a vibrant community of passionate individuals dedicated to exploring and advancing technology through hands-on projects, workshops, and collaborative learning experiences. As a premier technical club at the Indian Institute of Information Technology, Allahabad, we strive to foster a culture of innovation and excellence among our members. </p>
                    <img src="../images/ios.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1>
                    <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/nss.php">6. Sports Club</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">Welcome to the Sports Club of Indian Institute of Information Technology, Allahabad (IIITA)! At our club, we are dedicated to promoting physical fitness, sportsmanship, and a spirit of healthy competition among students. Whether you're a seasoned athlete or just looking to stay active, our club offers a range of activities and facilities to suit your interests.</p>
                    <img src="../images/NSS.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   "><a href="../ourclubs/ncc.php">7. Rangtarangini</a></h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> "Rangtarangini" is the vibrant drama club of the Indian Institute of Information Technology, Allahabad (IIITA). As a hub for creativity and expression, Rangtarangini provides a platform for students passionate about theater to showcase their talent, explore their artistic abilities, and immerse themselves in the world of drama.</p>
                    <img src="../images/ncc.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                </div>
                <!-- <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">8. Kannada Sangha</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> Establishing Kannada Sangha is a pioneer for engraving young minds towards compassion & inspiration of our ancestors. The purpose of this Kannada Sangha is to propagate Karnataka culture, Kannadigas and other like-minded people</p>
                    <img src="../images/Kannada.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div> -->
                <!-- <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">9. Tulu Sangha</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> Tulu is a Dravidian language spoken mainly in the south west part 
                        of the Indian state of Karnataka and also in the Kasaragod district of Kerala. The Tulu speaking region is often referred to as Tulu Nadu.</p>
                    <img src="../images/Tulu.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">10. Fine Art</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The aim of the fine arts club is to foster and artistic environment in our college and develop an appreciation of art and aesthetics in the student's community and also bring out the creative, expressive and aesthetic potential of each student..</p>
                    <img src="../images/fineart.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">11.Swachh Mijar</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">Cleanliness is Next to Godliness”
                        The thought of the people to live in a healthier environment have been kindled by the launch of “Swach Bharat”  AIET,  was also inspired by the Swach Bharat drive and gave a clarion call for “Swachh Mijar” .</p>
                    <img src="../images/mijar.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">12.Reader’s Club</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> One of the main goals of the AIET is to prepare the students for professional world, including academics and corporate. “READERS CLUB” is another endeavor of AIET, aimed at providing a platform for students to enhance the general & technical knowledge.</p>
                    <img src="../images/readers.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">13. Chirpp Club</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> . Students were able to listen to the calls and observe their behaviors of birds. Students also learned how to use the field guides and wanted to purchase the ‘Birds of Shobavana’ book published by the chirpp club.</p>
                    <img src="../images/chirp.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">14. Photography Club</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]">IMAGE IN – A PHOTOGRAPHY CLUB has been started with the main intention to generate photography skills among the students <br><br></p>
                    <img src="../images/photo.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">15. Language Lab</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The language lab is an initiative taken by the institute to improve learning & reading and presenting skills, where in 40 students per batch are accommodated with A/V facility with a language software and interactive programs..</p>
                    <img src="../images/lang.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">16. Adyathma</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> To synergize and embellish wisdom and practices of individuals to enable them to lead principle-centered life and offer practical holistic services to the modern society. <br><br><br></p>
                    <img src="../images/adhyathma.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">17. Life Skills (Yoga, Physical Fitness, Hygiene)</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> a group of psychosocial competencies and interpersonal skills that help people make informed decisions, solve problems, think critically and creatively, communicate effectively, build healthy relationships</p>
                    <img src="../images/yoga.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">alexa daniel</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%]  md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">18.Women Empowerment Cell</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> The WEP Cell of Alva’s Institute of Engineering and Technology has been formed with the following objectives

                        To identify and promote the growth of young women students as individuals in their own right.</p>
                    <img src="../images/women.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">jessy bush</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div>
            </div>
            <div class="flex flex-col items-center justify-evenly my-12 lg:px-10 lg:flex-row space-y-8 lg:space-y-0 ">
                <div
                    class="flex flex-col justify-center items-center p-10 bg-white shadow w-[90%] md:w-[70%] lg:w-[30%] overflow-hidden animate__animated animate__flipInY">
                    <div class="  "></div>
                    <div class="flex flex-col -mt-20 -mr-[352px] hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div>
                    <h1 class="text-xl tracking-tight font-semibold text-green-600 uppercase   ">19.Sports</h1>
                    <p class="text-black mt-3 text-center w-[90%] lg:w-[100%]"> AIET has the best sports infrastructure for the development of sports talent in India.  This has made AIET a force to reckon with in sports across all events..</p>
                    <img src="../images/sport.png" class="rounded-full mt-4" alt="">
                    <div class="flex flex-col -ml-[352px] mt-72 absolute hidden xl:block">
                        <div class="w-2 h-14 bg-blue-900"></div>
                        <div class="w-2 h-14 bg-green-500"></div>
                    </div> -->
                    <!-- <h1 class="text-lg font-semibold text-green-600 uppercase mt-1">mark warner</h1> -->
                    <!-- <h1 class="text-lg font-semibold text-black uppercase -mt-1">ceo / director</h1> -->
                <!-- </div> -->
            <!-- </div> -->
            </div>
        </div>
    </div> 
</div>
</body>
</html>