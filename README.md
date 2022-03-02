<div>
<h5>Set Up</h5>
<h6>- Database</h6>
  1.นำ File Database เข้าสู่ฐานข้อมูล MySql<br>
  2.ทำการสร้าง Database ชื่อ xo<br>
  3.ทำการ Import File ใน Folder Database ที่ชื่อ xo.sql<br>
<h6>- File</h6>
  1.โหลดไฟล์จาก GitHub<br>
  2.นำไฟล์ไปไว้ที่ ../xampp/htdocs<br>
  3.ทำการแตกไฟล์ที่โหลดจาก Github<br>
  4.จะได้ Folder ชื่อ xo<br>
<h6>Run Website</h6>
  1.เปิดโปรแกรม Xampp (หากไม่มีให้ทำการติดตั้ง Xampp ก่อน)<br>
  2.ที่ Xampp ให้ Start Apache และ MySQL<br>
  3.เปิด browser พิมพ์ localhost/xo ที่ URL<br>
<h6>วิธีการออกแบบ Website</h6>
  ใช้ PHP JS JQUERY ในการออกแบบ<br>
  - การสร้างตาราง ใช้ For Loop ของ PHP โดย รับค่า GET จาก Input เพื่อ กำหนดขนาดของตาราง<br>
  - การกำหนด X และ O ลงในตาราง นำ Jquery มาใช้ โดยกำหนด ID ในแต่และช่องไว้ เมื่อทำการ คลิกที่ช่องนั้น จะทำการนำ ICON X และ O ใส่ลงในแต่ละช่อง<br>
  - การ เช็คว่าฝ่ายไหน ชนะ โดยสร้าง Function สำหรับเช็คค่าในแต่ละช่อง ด้วย For Loop PHP ผ่านขนาดของตาราง และนำค่าที่ได้จาก Function มาเช็คค่า ด้วย Jquery เพื่อเทียบค่าว่าฝ่ายไหนชนะ<br>
  - การบันทึกข้อมูลเข้า Database ใช้ Jquery ส่งค่า POST เข้า ที่File post.php โดยการกดคลิกที่ Save Replay<br>
  - การดูReplay สร้าง กด เล่น และ Refresh ได้ โดยเมือนำการคลิกที่ เล่น จะนำค่าจากฐานข้อมูลมาใส่ในตารางแต่ละช่องตามลำดับ<br>
</div>
