# TailorSuite

TailorSuite is a **complete tailoring shop management system** developed in **CodeIgniter** and **MySQL**.  
It helps tailors and small clothing workshops manage their customers, orders, measurements, and invoices — all from a single, easy-to-use dashboard.


## 🧩 Overview

TailorSuite automates the manual process of recording customer measurements (known as “Naap”), generating invoices, tracking pending orders, and calculating dues.  
The system provides an intuitive web interface that supports multiple languages, including **Urdu (RTL)**, to make it usable for tailors in local shop environments.

**Tech Stack**
- Backend: PHP (CodeIgniter Framework)
- Database: MySQL
- Frontend: HTML, CSS, Bootstrap, jQuery
- Server: Apache (XAMPP / LAMP)
- Version: PHP 7.x / CodeIgniter 3.x+

**Developed by:** Waheed Shah — Software Engineer

## ⚙️ Key Features

### 1. Dashboard Overview
- Live statistics for customers, orders, invoices, and dues.
- Track today’s income and pending invoices at a glance.
- View top pending orders to prioritise workflow.

<img width="1321" height="899" alt="image" src="https://github.com/user-attachments/assets/e60c0f29-ad9f-4a1d-b75b-1833fd6d2569" />


### 2. POS & Invoice Management
- Create multi-item POS invoices with per-item discounts.
- Auto-calculates totals, paid amounts, and dues.
- Simplified checkout and “Save & Paid” workflow.
- Supports editing, deleting, and reprinting invoices.

<img width="1309" height="595" alt="image" src="https://github.com/user-attachments/assets/2271497f-57b0-4630-92c1-03df9ccea332" />



### 3. Measurement (Naap) Module
- Record detailed customer measurements visually using garment icons.
- Supports suit, coat, waistcoat, and other clothing types.
- Includes visual selectors for pockets, collars, sleeves, buttons, and more.
- Dual language support (English + Urdu).
- Saves measurements for easy reorders.

<img width="1286" height="778" alt="image" src="https://github.com/user-attachments/assets/26adc2d6-d03e-415c-b950-ea362a66697f" />

- Measurements visually using garment icons
<img width="1217" height="896" alt="image" src="https://github.com/user-attachments/assets/b9492c26-901b-4bb2-ba90-ed1691f3be23" />


### 4. Customer & Order Tracking
- Maintain complete profiles for each customer.
- Access order history and measurement data instantly.
- Track order status (Pending, Completed, Delivered).
<img width="1169" height="916" alt="image" src="https://github.com/user-attachments/assets/e79a2295-16c1-4104-afae-7436dee110c7" />

### 5. Reporting
- Income, pending invoice, and due summaries.
- Printable reports for daily and monthly sales.


## 💡 Innovation Highlights

- **Visual Measurement Interface:** unique icon-based form for garments, reducing manual entry errors.
- **Multilingual UI:** supports **Urdu (Right-to-Left)** labels for shop-floor accessibility.
- **Lightweight Architecture:** designed to run efficiently even on entry-level shop PCs.
- **Offline-Ready Workflow:** minimal JavaScript dependencies and fast load times for rural connectivity conditions.
- **Localized Business Logic:** focuses on tailoring-specific POS functions that generic systems overlook.

---

## 🧱 Architecture Overview


**Modules**
- Customers (CRUD operations, profile, history)
- Orders (create/update status, due dates)
- Invoices (POS system, discounts, payment handling)
- Measurements (structured Naap storage with visual interface)
- Reports (income, pending, dues)

**Security**
- CSRF protection via CodeIgniter tokens
- Server-side validation for all input
- Role-based authentication (admin/staff)
- Escaped SQL queries via CodeIgniter’s query builder


  ## 👨‍💻 My Role & Responsibilities

- Led full-cycle development — from design to deployment.
- Designed relational **MySQL schema** for customers, measurements, invoices, and orders.
- Built dynamic **POS module** handling multi-item invoices, discounts, and dues.
- Developed **measurement (Naap) UI** with icon-based garment options.
- Integrated Urdu language support and right-to-left layout handling.
- Managed environment setup using XAMPP and Apache for deployment.

  ## Impact & Project Status
  
- Reduced manual order-entry time by over 70%.
- Minimized measurement mistakes through visual garment options.
- Enhanced shop transparency with clear due tracking.
- Adopted successfully in multiple tailoring outlets.

- It was build in 2020 for one of my local clients. 
- I believe it is in use in some of the Tailors chain.

  ## License
  This project is distributed for educational and demonstration purposes.
  All rights reserved © 2025 — Waheed Shah.
