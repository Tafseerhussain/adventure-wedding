# 🏔️ Adventure Wedding — Laravel + Vite + Alpine.js + React + Bootstrap

This project is a modern Laravel-based web application for showcasing **Adventure Wedding products**, built with a **hybrid frontend stack**:
- 🧩 **Alpine.js** for lightweight interactivity
- ⚛️ **React** for dynamic UI components (e.g., Like button)
- 💅 **Bootstrap 5** for responsive styling and modals
- ⚡ **Vite** for fast bundling and hot reloading

---

## 📦 Tech Stack

| Layer | Technology |
|--------|-------------|
| Backend | Laravel 10+ |
| Frontend | Vite + ES Modules |
| UI Framework | Bootstrap 5 (via npm) |
| Reactive Frameworks | Alpine.js + React |
| Language | PHP 8.1+, JavaScript (ES2020+) |

---

## 🧠 Features

✅ **Product Listing Page**
- Displays all products from a JSON data file.
- Each product card shows title, price, short description, and image.

✅ **Dynamic “Like” Button**
- Built in **React** (`LikeButton.jsx`).
- Updates in real-time without reloading the page.
- Mounted via `app.jsx` using `createRoot()`.

✅ **Product Details Modal**
- Controlled by **Alpine.js**.
- Uses **Bootstrap Modal** for animation and UI.
- Opens dynamically when clicking “View Details”.
- Clicking outside **does not** close the modal (intentional behavior).

✅ **Seamless Integration**
- Alpine manages the modal logic.
- React handles isolated interactive components.
- Both coexist under Laravel Blade views using Vite’s hot-reload.

---

## 📁 Project Structure

