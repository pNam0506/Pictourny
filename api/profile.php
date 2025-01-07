<?php

    if(empty($_GET['username'])){
        echo 'ไม่มี';
    }
    
    $username = $_GET['username'];
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../style_tew.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="icon" type="image/png" href="img/title.png">
</head>
<body>


    
    <script src="profile.js"></script>
    <nav class="nevbar">
        <div class="profile">
            <li><a href=""><img src="../Rectangle 31.png" alt=""></a></li>
        </div>
        <ul class="menu">
            <li><a href="../Pictourny.html">Pictourny</a></li>
            <li><a href="../Gallery.html">Gallery</a></li>
            <li><a href="../top10.html">Top 10</a></li>
            <li><a href="../upload_pic.html">Upload Pic</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="" >
            <img src="img/search.png" alt="">
        </div>
        
    </nav>
    <div class="main">
        <section class="profile_body">
        
        <div class="profile_body1">
            <div class="profile_body1_1">
                <p><?php echo htmlspecialchars($username); ?></p>
            </div>
            <div class="profile_body1_2">
                <img src="../profile.png" alt="">
            </div>
            <div class="profile_body1_3">
                <div id="pro1" class="profile_body1_3_text">จำนวนรูปภาพที่อัพ</div>
                <div id="pro2" class="profile_body1_3_text">วันที่สมัครบัญชี</div>
                <div id="pro3" class="profile_body1_3_text">จำนวนครั้งที่ได้อันดับที่ 1 </div>
                <div id="pro4" class="profile_body1_3_text">จำนวนครั้งที่ได้อันดับที่ 2</div>
                <div id="pro5" class="profile_body1_3_text">จำนวนครั้งที่ได้อันดับที่ 3</div>
                <div id="pro6" class="profile_body1_3_text">หมวดที่อัปบ่อยที่สุด...</div>
        </div>
        
        
        </div>
        
        <div class="profile_body2">
            <div class="profile_body2_1">
                <p>ภาพของท่าน...</p>
            </div>
            
            <div class="profile_body2_2">
                <!-- รูป1 -->
                <div class="ipopup" id="popup-1"> 
                <img onclick="togglePopup()" src="img/Rectangle 25.png" alt="">
                
                     <div class="overlay"></div> 
                     <div class="content">
                        <div class="close-btn" onclick="togglePopup()">&times;</div>
                        <div class="img_name"><p>หอยทอด</p></div> 
                        <img src="img/Rectangle 52_full.png" alt=""> 
                         <div class="img_info"> 
                             <div class="info1">
                                <img src="img/dislike 4.png" alt="">
                                <p>0</p>
                            </div>
                            <div class="info2">
                                <img src="img/thumbs-up 4.png" alt="">
                                <p>999+ k</p>
                            </div>
                            <div class="info3">
                                <img src="img/envelope 3.png" alt="">
                                <p>103 k</p>
                            </div> 
                        </div>
                    </div>


                </div> 
                <!-- รูป2 -->
                <div class="ipopup" id="popup-2"> 
                    <img onclick="togglePopup2()" src="img/Rectangle 26.png" alt="">
                    
                         <div class="overlay"></div> 
                         <div class="content2">
                            <div class="close-btn" onclick="togglePopup2()">&times;</div>
                            <div class="img_name"><p>หอยใหญ่</p></div> 
                            <img src="img/full_2.png" alt=""> 
                             <div class="img_info"> 
                                 <div class="info1">
                                    <img src="img/dislike 4.png" alt="">
                                    <p>0</p>
                                </div>
                                <div class="info2">
                                    <img src="img/thumbs-up 4.png" alt="">
                                    <p>998+ k</p>
                                </div>
                                <div class="info3">
                                    <img src="img/envelope 3.png" alt="">
                                    <p>143 k</p>
                                </div> 
                            </div>
                        </div>
    
    
                    </div> 
                    <!-- รูป3 -->
                    <div class="ipopup" id="popup-3"> 
                        <img onclick="togglePopup3()" src="img/Rectangle 43.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content3">
                                <div class="close-btn" onclick="togglePopup3()">&times;</div>
                                <div class="img_name"><p>หอยใหญ่มาก</p></div> 
                                <img src="img/full_4.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div> 
                    <!-- รูป4 -->
                    <div class="ipopup" id="popup-4"> 
                        <img onclick="togglePopup4()" src="img/Rectangle 44.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content4">
                                <div class="close-btn" onclick="togglePopup4()">&times;</div>
                                <div class="img_name"><p>น้องซีป่วนเมือง</p></div> 
                                <img src="img/full_5.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div>
                    <!-- รูป5 -->
                    <div class="ipopup" id="popup-5"> 
                        <img onclick="togglePopup5()" src="img/Rectangle 45.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content5">
                                <div class="close-btn" onclick="togglePopup5()">&times;</div>
                                <div class="img_name"><p>หอยใหญ่</p></div> 
                                <img src="img/full_7.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div>
                    <!-- รูป6 -->
                    <div class="ipopup" id="popup-6"> 
                        <img onclick="togglePopup6()" src="img/Rectangle 46.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content6">
                                <div class="close-btn" onclick="togglePopup6()">&times;</div>
                                <div class="img_name"><p>หอยใหญ่</p></div> 
                                <img src="img/full_8.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div>
                    <!-- รูป7 -->
                    <div class="ipopup" id="popup-7"> 
                        <img onclick="togglePopup7()" src="img/Rectangle 47.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content7">
                                <div class="close-btn" onclick="togglePopup7()">&times;</div>
                                <div class="img_name"><p>หอยใหญ่</p></div> 
                                <img src="img/full_3.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div>
                    <!-- รูป8 -->
                    <div class="ipopup" id="popup-8"> 
                        <img onclick="togglePopup8()" src="img/Rectangle 48.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content8">
                                <div class="close-btn" onclick="togglePopup8()">&times;</div>
                                <div class="img_name"><p>หอยใหญ่</p></div> 
                                <img src="img/full_6.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div>
                    <!-- รูป9 -->
                    <div class="ipopup" id="popup-9"> 
                        <img onclick="togglePopup9()" src="img/Rectangle 49.png" alt="">
                             <div class="overlay"></div> 
                             <div class="content9">
                                <div class="close-btn" onclick="togglePopup9()">&times;</div>
                                <div class="img_name"><p>หอยใหญ่</p></div> 
                                <img src="img/full_9.png" alt=""> 
                                 <div class="img_info"> 
                                     <div class="info1">
                                        <img src="img/dislike 4.png" alt="">
                                        <p>0</p>
                                    </div>
                                    <div class="info2">
                                        <img src="img/thumbs-up 4.png" alt="">
                                        <p>999+ k</p>
                                    </div>
                                    <div class="info3">
                                        <img src="img/envelope 3.png" alt="">
                                        <p>103 k</p>
                                    </div> 
                                </div>
                            </div>
        
        
                        </div>                

                
            </div>
            <div class="contrainer" id="contrainer">
                <img src="" alt="">
                <img src="img/remove.png" alt="">
            </div>

        </div>
    </section>
    <div class="profile_bottom">
        <div class="profile_bottom_back">
        <a href="login.php">
            <button>
                <img src="./logout.png" style="transform: rotate(180deg);">
            </button>
        </a>
        </div>
        <div class="popup">
            <button onclick="popup_info()"><img src="img/info.png" alt=""></button>
            <span class="popuptext" id="iinfo_popup"><p>วิธีการใช้งาน Pictourny</p>์</span>
        </div>
    </div>
</div>

    

</body>
</html>