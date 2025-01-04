const { exec } = require('child_process');

module.exports = async (req, res) => {
  // เรียกใช้คำสั่ง PHP เพื่อรันไฟล์ login.php
  exec('php api/login.php', (error, stdout, stderr) => {
    if (error) {
      console.error(`exec error: ${error}`);
      return res.status(500).send('Error');
    }
    res.send(stdout); // ส่งผลลัพธ์จาก PHP กลับไปยังผู้ใช้
  });
};
