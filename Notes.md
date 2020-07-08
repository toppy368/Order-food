# Laravel 主要功能說明筆記
URL: https://hackmd.io/w0Rp-d4aQDOma8laKXNHPw

本筆記是為了自己學習所需要而整理的文件，這只是方便查詢的懶人包，如有差異請依照框架文件說明為主。

## 網址部分
框架官網：https://laravel.com/  
框架文件官網：https://laravel.com/docs/7.x  

中文社群框架網頁：https://laravel.tw/

## 安裝方式
請檢查官網文件的 Installation 內容  
https://laravel.com/docs/7.x

### 啟動專案的方式
使用終端機切換到專案目錄（請用 `cd` 指令切換目錄），然後輸入以下指令：  
`php artisan serve`

終端機確定可以執行該專案後 (沒有噴任何錯誤碼並提示臨時網址時)，請在**瀏覽器網址列**輸入以下位置  
`http://localhost:8000`

## 重要功能解說

### Routing 路由器

位置：`routes/web.php`

控制網頁各頁面的連線導向，例如輸入 `/page` 後，頁面如何切換等，例如 HTTP 302 Found 重新導向等頁面切換也需要在此操作

使用者的 `User/id` 頁面也應該由此定義

### Controllers 控制器

放置PHP主要程式碼的地方，相當於強型別程式語言的 `Class`

### Views 視圖

網頁前端由此控制，也就是UI

### Database: Migrations 資料庫遷移

可用來取代 SQL 的完整句子，利用框架給予的程式碼，可以用比較清楚的方式**建立/刪除資料庫**，相當於SQL的 `CREATE TABLE` 與 `DROP TABLE` ，表格內的各欄位與屬性也可透過此功能快速設定

### Eloquent ORM 

連接資料庫並與資料庫互動的相關方法，資料庫的 **新增/查詢/刪除** 可以透過這裡控制，同時也可以免除直接利用SQL句子存取資料表可能發生的 SQL injection 問題。