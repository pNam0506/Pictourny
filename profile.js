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