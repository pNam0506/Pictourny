window.onscroll = function() {
    scrollFunction();
};
//pro1
function popup_info(){
    var popup = document.getElementById("iinfo_popup")
    popup.classList.toggle("show");
}

function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
}

function togglePopup2(){
    document.getElementById("popup-2").classList.toggle("active2");
}

function togglePopup3(){
    document.getElementById("popup-3").classList.toggle("active3");
}

function togglePopup4(){
    document.getElementById("popup-4").classList.toggle("active4");
}

function togglePopup5(){
    document.getElementById("popup-5").classList.toggle("active5");
}
function togglePopup6(){
    document.getElementById("popup-6").classList.toggle("active6");
}

function togglePopup7(){
    document.getElementById("popup-7").classList.toggle("active7");
}

function togglePopup8(){
    document.getElementById("popup-8").classList.toggle("active8");
}

function togglePopup9(){
    document.getElementById("popup-9").classList.toggle("active9");
}



//pro1
$(document).ready(function(){
    var originalText = $("#pro2").text(); // เก็บข้อความเดิมไว้ในตัวแปร originalText

    // เมื่อเมาส์เข้ามาทับตัวอักษร
    $("#pro1").hover(function(){
        $(this).text("120 รููป");
        $(this).css("background-color" , "rgba(217, 217, 217, 0.30)");
    });

    // เมื่อเมาส์ออกจากตัวอักษร
    $("#pro1").mouseleave(function(){
        $(this).text(originalText); // เปลี่ยนกลับเป็นข้อความเดิมที่เก็บไว้
        $(this).css("background-color" , "rgba(217, 217, 217, 0.15)")
    });
});

//pro2
$(document).ready(function(){
    var originalText = $("#pro2").text(); // เก็บข้อความเดิมไว้ในตัวแปร originalText

    // เมื่อเมาส์เข้ามาทับตัวอักษร
    $("#pro2").hover(function(){
        $(this).text("22");
        $(this).css("background-color" , "rgba(217, 217, 217, 0.30)");
    });

    // เมื่อเมาส์ออกจากตัวอักษร
    $("#pro2").mouseleave(function(){
        $(this).text(originalText); // เปลี่ยนกลับเป็นข้อความเดิมที่เก็บไว้
        $(this).css("background-color" , "rgba(217, 217, 217, 0.15)")
    });
});

//pro3
$(document).ready(function(){
    var originalText = $("#pro3").text(); // เก็บข้อความเดิมไว้ในตัวแปร originalText

    // เมื่อเมาส์เข้ามาทับตัวอักษร
    $("#pro3").hover(function(){
        $(this).text("184 ครั้ง");
        $(this).css("background-color" , "rgba(217, 217, 217, 0.30)");
    });

    // เมื่อเมาส์ออกจากตัวอักษร
    $("#pro3").mouseleave(function(){
        $(this).text(originalText); // เปลี่ยนกลับเป็นข้อความเดิมที่เก็บไว้
        $(this).css("background-color" , "rgba(217, 217, 217, 0.15)")
    });
});

//pro4
$(document).ready(function(){
    var originalText = $("#pro4").text(); // เก็บข้อความเดิมไว้ในตัวแปร originalText

    // เมื่อเมาส์เข้ามาทับตัวอักษร
    $("#pro4").hover(function(){
        $(this).text("54 ครั้ง");
        $(this).css("background-color" , "rgba(217, 217, 217, 0.30)");
    });

    // เมื่อเมาส์ออกจากตัวอักษร
    $("#pro4").mouseleave(function(){
        $(this).text(originalText); // เปลี่ยนกลับเป็นข้อความเดิมที่เก็บไว้
        $(this).css("background-color" , "rgba(217, 217, 217, 0.15)")
    });
});

//pro4
$(document).ready(function(){
    var originalText = $("#pro5").text(); // เก็บข้อความเดิมไว้ในตัวแปร originalText

    // เมื่อเมาส์เข้ามาทับตัวอักษร
    $("#pro5").hover(function(){
        $(this).text("86 ครั้ง");
        $(this).css("background-color" , "rgba(217, 217, 217, 0.30)");
    });

    // เมื่อเมาส์ออกจากตัวอักษร
    $("#pro5").mouseleave(function(){
        $(this).text(originalText); // เปลี่ยนกลับเป็นข้อความเดิมที่เก็บไว้
        $(this).css("background-color" , "rgba(217, 217, 217, 0.15)")
    });
});

//pro4
$(document).ready(function(){
    var originalText = $("#pro6").text(); // เก็บข้อความเดิมไว้ในตัวแปร originalText

    // เมื่อเมาส์เข้ามาทับตัวอักษร
    $("#pro6").hover(function(){
        $(this).text("ตลก");
        $(this).css("background-color" , "rgba(217, 217, 217, 0.30)");
    });

    // เมื่อเมาส์ออกจากตัวอักษร
    $("#pro6").mouseleave(function(){
        $(this).text(originalText); // เปลี่ยนกลับเป็นข้อความเดิมที่เก็บไว้
        $(this).css("background-color" , "rgba(217, 217, 217, 0.15)")
    });
});


let images = [
    { 
        url: "img/top10_6.png", 
        caption: "777,777" 
    },
    { 
        url: "img/top10_1.jpg", 
        caption: "999,999" 
    },
    { 
        url: "img/top10_3.jpg", 
        caption: "1 M" 
    },
    { 
        url: "img/top10_5.jpg", 
        caption: "989,345" 
    },
    { 
        url: "img/top10_7.png", 
        caption: "827,434" 
    },
    { 
        url: "img/top10_10.jpg", 
        caption: "738,454" 
    },
    { 
        url: "img/top10_2.jpg", 
        caption: "723,342" 
    },
    { 
        url: "img/top10_9.png", 
        caption: "712,342" 
    },
    { 
        url: "img/top10_8.jpg", 
        caption: "709,231" 
    },
    { 
        url: "img/top10_4.jpg", 
        caption: "702,342" 
    }
];

// เลือก div ที่มี id เป็น "gallery"
const gallery = document.getElementById("top10_img");

// วน loop เพื่อสร้าง element แสดงรูปภาพและรายละเอียด
for (let i = 0; i < images.length; i++) {
    // สร้าง element div สำหรับแสดงรูปภาพและรายละเอียด
    const imageDiv = document.createElement("div");
    imageDiv.classList.add("top10_inner");

    // สร้าง element img เพื่อแสดงรูปภาพ
    const image = document.createElement("img");
    image.src = images[i].url;
    image.alt = images[i].caption;
    image.style.borderRadius = "32px";
    image.style.width = "196px"
    image.style.height = "173px"
    image.style.boxShadow = "2px 2px 5px rgba(0, 0, 0, 0.5)";
    imageDiv.appendChild(image);

    // สร้าง element p เพื่อแสดงรายละเอียด
    const imageinfo = document.createElement("div");
    imageinfo.classList.add("top10_info")
    const love = document.createElement("img");
    love.src = "img/thumbs-up 4.png";
    love.style.width = "24px";
    love.style.height = "24px";
    imageinfo.appendChild(love);
    const caption = document.createElement("p");
    caption.textContent = images[i].caption;
    imageinfo.appendChild(caption);
    imageDiv.appendChild(imageinfo);

    if (i === 0 || i === 4) {
        imageDiv.style.marginTop = "10px";
    } 
    if (i === 2) {
        imageDiv.style.marginTop = "-30px";

        const coinImage = document.createElement("img");
        coinImage.src = "img/medal 1.png"; // ตั้งค่า URL ของรูปเหรียญ
        coinImage.classList.add("coin-image");
        coinImage.style.width = "44px"; // ปรับความกว้างของรูปเหรียญ
        coinImage.style.height = "auto";
        imageDiv.appendChild(coinImage);
    }
    if (i === 1) {

        const coinImage = document.createElement("img");
        coinImage.src = "img/medal 2.png"; // ตั้งค่า URL ของรูปเหรียญ
        coinImage.classList.add("coin-image");
        coinImage.style.width = "44px"; // ปรับความกว้างของรูปเหรียญ
        coinImage.style.height = "auto";
        imageDiv.appendChild(coinImage);
    }
    if (i === 3) {

        const coinImage = document.createElement("img");
        coinImage.src = "img/medal 3.png"; // ตั้งค่า URL ของรูปเหรียญ
        coinImage.classList.add("coin-image");
        coinImage.style.width = "44px"; // ปรับความกว้างของรูปเหรียญ
        coinImage.style.height = "auto";
        imageDiv.appendChild(coinImage);
    }

    // เพิ่ม element div ลงใน gallery
    gallery.appendChild(imageDiv);

    
}