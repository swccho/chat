<div class="main_body   ">

    <div class="chat_boxs">
        <div class="search-box">
            <form action="">
                <div class="form-group row">
                    <div class="search_icon col-2">
                        <i class="fa fa-search col-10 text-muted"></i>
                    </div>
                    <input type="text" placeholder="Search">
                </div>
            </form>
        </div>
        <div class="chat_list">
        <div class="box" onclick="showMsg(0)">

            <div class="image">

                <img src="https://i.pinimg.com/originals/fe/ec/27/feec279250552054d2c48edea1896798.jpg" alt="">
                
            </div>

            <div class="info">
                <p class="name">Will Smith</p>
                <small class="messages">I like your mobile app design.</small>

            </div>

            <div class="status text-center">
                <small>Just now</small>
                <br>
                <p class="badge badge-primary">4</p>
            </div>

        </div>
        <div class="box"onclick="showMsg(1)">

            <div class="image">

                <img src="https://thumbor.forbes.com/thumbor/fit-in/416x416/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5c5b272631358e2a162e6e93%2F0x0.jpg%3Fbackground%3D000000%26cropX1%3D824%26cropX2%3D3332%26cropY1%3D72%26cropY2%3D2581" alt="">

            </div>

            <div class="info">
                <p class="name">Daniel Radcliffe</p>
                <small class="messages">I like your mobile app design.</small>

            </div>

            <div class="status text-center">
                <small>Just now</small>
                <br>
                <p class="badge badge-primary">4</p>
            </div>

        </div>
        <div class="box"onclick="showMsg(2)">

            <div class="image">

                <img src="https://images.yourstory.com/cs/7/4c455a90a21411e98b07315772315642/Imagefl4n-1586784423478.jpg" alt="">

            </div>

            <div class="info">
                <p class="name">Emma Watson</p>
                <small class="messages">I like your mobile app design.</small>

            </div>

            <div class="status text-center">
                <small>Just now</small>
                <br>
                <p class="badge badge-primary">4</p>
            </div>

        </div>
        <div class="box"onclick="showMsg(3)">

            <div class="image">

                <img src="https://bifa.imgix.net/web/2018/12/Emma-Stone-Credit-David-Fisher.jpg?auto=compress%2Cformat&fit=scale&h=2254&ixlib=php-3.3.0&w=1600&wpsize=xl" alt="">

            </div>

            <div class="info">
                <p class="name">Emma Stone</p>
                <small class="messages">I like your mobile app design.</small>

            </div>

            <div class="status text-center">
                <small>Just now</small>
                <br>
                <p class="badge badge-primary">4</p>
            </div>

        </div>
        <div class="box"onclick="showMsg(4)">

            <div class="image">

                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Tobey_Maguire_2014.jpg" alt="">

            </div>

            <div class="info">
                <p class="name">Toby Maguire</p>
                <small class="messages">I like your mobile app design.</small>

            </div>

            <div class="status text-center">
                <small>Just now</small>
                <br>
                <p class="badge badge-primary">4</p>
            </div>

        </div>
        <div class="box"onclick="showMsg(5)">

            <div class="image">

                <img src="https://i.pinimg.com/originals/50/9c/26/509c2694309791e3175a928242b31266.jpg" alt="">

            </div>

            <div class="info">
                <p class="name">Tom Holland</p>
                <small class="messages">I like your mobile app design.</small>

            </div>

            <div class="status text-center">
                <small>Just now</small>
                <br>
                <p class="badge badge-primary">4</p>
            </div>

        </div>
        </div>
    </div>

    <div class="chat">

<!--    CHAT LIST    -->
        <div class="chat_box_header">
            <div class="headerimage">
            <img onclick="showC8List()" class="backImage" src="https://img.icons8.com/carbon-copy/100/000000/back.png"/>
                <img src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" alt="">
            </div>
            <div class="headerInfo">
                <p>

                    Alexa
                    <br>
                    <small>Active Now <i class="fa fa-circle text-success"></i></small>

                </p>

            </div>
            <div class="headerOptions">
                <i class="fa fa-exclamation-circle" onclick="openOptions()"></i>
                <i class="fa fa-video-camera"></i>    
                <i class="fa fa-phone"></i>

                
            </div>
        </div>

<!--    CHAT LIST    -->

<!--   ALL MESSAGES     -->

        <div class="chat_box ">

<!--        received messages        -->

                <?php
                    include 'receviedmessages.php';
                ?>


<!--        received messages        -->
            <br>
<!--        received messages        -->

            <?php

                include 'sentMessages.php';

            ?>


<!--        received messages        -->
            <br>

        </div>

<!--   ALL MESSAGES     -->

<!--    SENT MESSAGE FORM    -->

        <div class="sentMessage">
        <div class="mesageoptions">
                    <span> <i class="fa fa-paperclip"></i></span>
                    <span> <i class="fa fa-instagram"></i></span>
                    <span> <i class="fa fa-picture-o"></i></span>
                    <span> <i class="fa fa-smile-o"></i></span>
                </div>
                <form action="">
                    <input type="text">
                </form>
                <div class="sentoption">
                    <i class="fa fa-paper-plane"></i>
                </div>
            
        </div>

 <!--    SENT MESSAGE FORM    -->

    </div>

</div>