# 🍲 Project การออกแบบและพัฒนาระบบการสั่งอาหารร้านแม่พลอยใส (The Designing and Development of Ordering System for Mae Ploysai) 🍲

การออกแบบและพัฒนาระบบการสั่งอาหารร้านแม่พลอยใส
(The Designing and Development of Ordering System for Mae Ploysai)
ซึ่งเป็นโครงการจบการศึกษา (Project) ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) สาขาวิชา เทคโนโลยีสารสนเทศ สาขางาน นักพัฒนาซอฟต์แวร์คอมพิวเตอร์

## 👥 สมาชิกผู้พัฒนา (Developer)
โปรเจคนี้พัฒนาโดยนักศึกษาแบบคู่ (จับคู่ 2 คน):
1. **รวิสรา แสงใส (Rawisara Sangsai)** - [GitHub Profile](https://github.com/RawisaraSangsai)
2. **วุฒติชัย พลขุนทด (WuttichayPhonkunthod)** - [GitHub Profile](https://github.com/NuttoWuttichay)

---

## 🌟 คุณสมบัติของระบบ (Features)

### 👤 ส่วนสำหรับลูกค้า (Customer / Frontend)
* **หน้าแรก (Index):** แสดงข้อมูลภาพรวมของร้านค้า โปรโมชัน หรือเมนูแนะนำ
* **ระบบเมนูสินค้า/อาหาร (Menu):** แสดงรายการสินค้าทั้งหมดแยกตามหมวดหมู่ พร้อมราคา
* **หน้ารู้จักเรา (About):** แสดงข้อมูลรายละเอียด ความเป็นมา และช่องทางการติดต่อของร้าน
* **ระบบตะกร้าสินค้าและการสั่งซื้อ:** *[ถ้ามี: ลูกค้าสามารถเลือกสินค้าลงตะกร้าและยืนยันคำสั่งซื้อได้]*

### 🔑 ส่วนสำหรับผู้ดูแลระบบ (Admin / Backend)
* **ระบบเข้าสู่ระบบ/ออกจากระบบ (Login/Logout):** เพื่อความปลอดภัยในการเข้าถึงหลังบ้าน
* **ระบบจัดการเมนูสินค้า:** สามารถ เพิ่ม, ลบ, แก้ไข รายการอาหาร ราคา และรูปภาพได้
* **ระบบตรวจสอบรายการสั่งซื้อ:** ดูประวัติการสั่งซื้อและสถานะออเดอร์ของลูกค้า

---

## 🛠️ เครื่องมือและเทคโนโลยีที่ใช้ (Tech Stack)

* **Frontend:** HTML5, CSS3 (`Style.css`), JavaScript, Bootstrap
* **Backend:** PHP 
* **Database:** MySQL / MariaDB (เชื่อมต่อผ่านไฟล์ `Connect.php`)
* **Tools:** VS Code, XAMPP / AppServ (สำหรับจำลองเว็บเซิร์ฟเวอร์)

---

## 🚀 วิธีการติดตั้งและใช้งานเครื่องเครื่องคอมพิวเตอร์ (Installation)

1. **ดาวน์โหลดโปรเจค:**
   ```bash
   git clone [https://github.com/RawisaraSangsai/Project_Mae_Ploysai.git](https://github.com/RawisaraSangsai/Project_Mae_Ploysai.git)
