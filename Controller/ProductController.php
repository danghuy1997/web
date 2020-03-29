<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Product Controller
 *
 * @property \App\Model\Table\ProductTable $Product
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout("default");
        // $this->Auth->allow(['index','single','search']);
        
    }
    public $paginate = array(
        'oder' => array('created' => 'desc'),
        'limit' => 8,
    );
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $conn = ConnectionManager::get('default');
        $slide = $conn->execute('SELECT * FROM slides',array(1));
        $this->set(compact('slide'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $stores = $conn->execute('SELECT * FROM store',array(1));
        $this->set(compact('stores'));

        $conn = ConnectionManager::get('default');
        $store = $conn->execute('SELECT * FROM store limit 5  ',array(1));
        $this->set(compact('store'));

        $conn = ConnectionManager::get('default');
        $featured = $conn->execute("SELECT * FROM product,store,ratting WHERE substring(type,2,1) AND product.store_id = store.store_id AND product.ratting_id = ratting.ratting_id AND product.product_id ORDER BY RAND() limit 6 ",array(1));
        $this->set(compact('featured'));

        $conn = ConnectionManager::get('default');
        $catalogs = $conn->execute('SELECT * FROM catalog limit 4',array(1));
        $this->set(compact('catalogs'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $catalogiessmall = $conn->execute('SELECT * FROM catalogli',array(1));
        $this->set(compact('catalogiessmall'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $blog = $conn->execute('SELECT * FROM blog',array(1));
        $this->set(compact('blog'));

        $conn = ConnectionManager::get('default');
        $selling = $conn->execute('SELECT * FROM product,store,ratting WHERE substring(type,3,1) AND product.store_id = store.store_id AND product.ratting_id = ratting.ratting_id AND product.product_id ORDER BY RAND() limit 6 ',array(1));
        $this->set(compact('selling'));

        $conn = ConnectionManager::get('default');
        $productsale = $conn->execute('SELECT * FROM product,flashsale,detailflashsale,store,ratting WHERE detailflashsale.product_id = product.product_id  AND flashsale.flashsale_id = detailflashsale.flashsale_id AND flashsale.status = 1 AND product.store_id = store.store_id AND product.ratting_id = ratting.ratting_id AND product.product_id ORDER BY RAND() limit 6 ',array(1));
        $this->set(compact('productsale'));

        $conn = ConnectionManager::get('default');
        $avataflash = $conn->execute('SELECT * FROM flashsale  WHERE flashsale.status = 1 ',array(1));
        $this->set(compact('avataflash'));

        $conn = ConnectionManager::get('default');
        $timeflash = $conn->execute('SELECT * FROM flashsale  WHERE flashsale.status = 1 ',array(1));
        $this->set(compact('timeflash'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function single($id = null)
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $single = $conn->execute("SELECT * FROM product,store,trademark,ratting WHERE product_id = $id AND product.store_id = store.store_id AND product.trademark_id = trademark.trademark_id AND product.ratting_id = ratting.ratting_id ",array($id));
            $this->set(compact('single'));
        }

        $conn = ConnectionManager::get('default');
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $tostore = $conn->execute("SELECT * FROM product,store WHERE product_id = $id AND product.store_id = store.store_id ",array($id));
            $this->set(compact('tostore'));
        }

        $conn = ConnectionManager::get('default');
        if(isset($_GET["trademark_id"])){
            $id=$_GET["trademark_id"];
            $relatest = $conn->execute("SELECT * FROM product,store,trademark WHERE product.trademark_id = $id AND product.store_id = store.store_id AND product.trademark_id = trademark.trademark_id AND product.product_id ORDER BY RAND() limit 3 ",array($id));
            $this->set(compact('relatest'));
        }

        $conn = ConnectionManager::get('default');
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $detail = $conn->execute("SELECT * FROM product,trademark,baohanh,bemat,chongnuoc,chucnang,dang,daydeo,gioitinh,kichthuoc,kinh,loaimay,matso,xuatxu WHERE product_id = $id AND product.trademark_id = trademark.trademark_id AND product.id_baohanh = baohanh.id_baohanh AND product.id_bemat = bemat.id_bemat AND product.id_chongnuoc = chongnuoc.id_chongnuoc AND product.id_chucnang = chucnang.id_chucnang AND product.id_dang = dang.id_dang AND product.id_daydeo = daydeo.id_daydeo AND product.id_gioitinh = gioitinh.id_gioitinh AND product.id_kichthuoc = kichthuoc.id_kichthuoc AND product.id_kinh = kinh.id_kinh AND product.id_matso = matso.id_matso AND product.id_xuatxu = xuatxu.id_xuatxu AND product.product_id limit 1",array($id));
            $this->set(compact('detail'));
        }

        $conn = ConnectionManager::get('default');
        $comment = $conn->execute('SELECT * FROM comment ',array(1));
        $this->set(compact('comment'));


        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu',array(1));
        $this->set(compact('menu'));

        

    }
    public function blog()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $blog = $conn->execute('SELECT * FROM blog',array(1));
        $this->set(compact('blog'));
    }
    public function blogdetail($id = null)
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $blog = $conn->execute('SELECT * FROM blog',array(1));
        $this->set(compact('blog'));

        $conn = ConnectionManager::get('default');
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $blogdetail = $conn->execute("SELECT * FROM blog WHERE blog_id = $id ",array($id));
            $this->set(compact('blogdetail'));
        }
    }

    public function cart($id = null)
    {
        // $conn = ConnectionManager::get('default');
        // $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        // $this->set(compact('catalogies'));
        // $session = $this->request->session();
        // $conn = ConnectionManager::get('default');
        // $cart = array();
        // if(isset($_SESSION["cart"])){
        //     $cart = $_SESSION["cart"];
        // }
        // if(isset($_GET["acction"]) && isset($_GET["id"])){
        //     $id = $_GET["id"];
        //     if($_GET["acction"] == "add"){
        //         for($i = 0; $i < count($cart); $i++){
        //             if($cart[$i]["product_id"] == $id){
        //                 $cart[$i]["quanlity"]++;
        //                 break;
        //             }
        //         }
        //         if($i == count($cart)){
        //             $cart = $conn->execute("SELECT * FROM product WHERE product_id = $id ",array($id));
        //             $count = count($cart);
        //             if($count > 0){
        //             $product["quanlity"] = 1;
        //             $count[] = $product;
        //             }
        //         }
        //     }
        // }
        // $_SESSION["cart"] = $cart;
        // $this->set(compact('cart'));
        // $total = 0;
        // foreach ($cart as $sp) {
        //     $money = $sp["price"] * $sp["quanlity"];
        //     $total += $money;
        // }?

    }
    public function checkout()
    {
        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

    }
    public function search()
    {
        $conn = ConnectionManager::get('default');
        if(isset($_POST["search"])){
                $ten=$_POST["tensp"];                                                          
            if($ten!="")
            {
                $search = $conn->execute("SELECT * FROM product,store WHERE product_name like '%$ten%' AND product.store_id = store.store_id ", array(1));
            }
            if($ten=="")
            {
                $search = $conn->execute("SELECT * FROM product, store WHERE product.store_id = store.store_id ",array(1));
            }
            $this->set(compact('search'));
        }

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu',array(1));
        $this->set(compact('menu'));
    }
    public function donghotantan()
    {
        $conn = ConnectionManager::get('default');
        $tantannew = $conn->execute('SELECT * FROM product,species,store WHERE product.species_id = species.species_id AND product.species_id = 4 AND product.store_id = 1 ',array(1));
        $this->set(compact('tantannew'));

        $conn = ConnectionManager::get('default');
        $tantanhot = $conn->execute('SELECT * FROM product,species,store WHERE product.species_id = species.species_id AND product.species_id = 2 AND product.store_id = 1 ',array(1));
        $this->set(compact('tantanhot'));

        $conn = ConnectionManager::get('default');
        $tantanselling = $conn->execute('SELECT * FROM product,species,store WHERE product.species_id = species.species_id AND product.species_id = 1 AND product.store_id = 1 ',array(1));
        $this->set(compact('tantanselling'));
    }
    public function producttantan()
    {
        $conn = ConnectionManager::get('default');
        $producttantan = $conn->execute('SELECT * FROM product,species WHERE product.species_id = species.species_id AND product.store_id = 1 AND product.product_id ORDER BY RAND()',array(1));
        $this->set(compact('producttantan'));
    }
    public function donghoeverest()
    {
        $conn = ConnectionManager::get('default');
        $everest = $conn->execute('SELECT * FROM product,store WHERE product_id between  21 and 40 ',array(1));
        $this->set(compact('everest'));
    }
    public function donghothanhphat($id = null)
    {
        $conn = ConnectionManager::get('default');
        $thanhphat = $conn->execute('SELECT * FROM product WHERE product_id between  41 and 60 ',array(1));
        $this->set(compact('thanhphat'));
    }
    public function donghonam()
    {
        $product = $this->paginate($this->Product);
        $conn = ConnectionManager::get('default');
        $donghonam = $conn->execute('SELECT * FROM product,catalog,species,store WHERE product.catalog_id = catalog.catalog_id AND product.catalog_id = 1 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND()  limit 8 ',array(1));
        $this->set(compact('donghonam'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu',array(1));
        $this->set(compact('menu'));

        // $conn = ConnectionManager::get('default');
        // if(isset($_GET["trademark_id"])){
        //     $id=$_GET["trademark_id"];
        //     $relatest = $conn->execute("SELECT * FROM product,store,trademark WHERE product.trademark_id = $id AND product.store_id = store.store_id AND product.trademark_id = trademark.trademark_id AND product.product_id ORDER BY RAND() limit 4 ",array($id));
        //     $this->set(compact('relatest'));
        // }
    }
    public function donghonu()
    {
        $conn = ConnectionManager::get('default');
        $donghonu = $conn->execute('SELECT * FROM product,catalog,species,store WHERE product.catalog_id = catalog.catalog_id AND product.catalog_id = 2 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghonu'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));

    }
    public function donghotreem()
    {
        $conn = ConnectionManager::get('default');
        $donghotreem = $conn->execute('SELECT * FROM product,catalog,species,store WHERE product.catalog_id = catalog.catalog_id AND product.catalog_id = 3 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghotreem'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));
    }
    public function phukien()
    {
        $conn = ConnectionManager::get('default');
        $phukien = $conn->execute('SELECT * FROM product,catalog,species,store WHERE product.catalog_id = catalog.catalog_id AND product.catalog_id = 4 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('phukien'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));
    }
    public function donghothuysi()
    {
        $conn = ConnectionManager::get('default');
        $donghothuysi = $conn->execute('SELECT * FROM product,catalog,species,store WHERE product.catalog_id = catalog.catalog_id AND product.catalog_id = 5 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghothuysi'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));
    }
    public function donghogshock()
    {
        $conn = ConnectionManager::get('default');
        $donghogshock = $conn->execute('SELECT * FROM product,catalog,species,store WHERE product.catalog_id = catalog.catalog_id AND product.catalog_id = 6 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghogshock'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));
    }
    public function donghocasio()
    {
        $conn = ConnectionManager::get('default');
        $donghocasio = $conn->execute('SELECT * FROM product,trademark,species,store WHERE product.trademark_id = trademark.trademark_id AND product.trademark_id = 1 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghocasio'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));

    }
    public function donghocitizen()
    {
        $conn = ConnectionManager::get('default');
        $donghocitizen = $conn->execute('SELECT * FROM product,trademark,species,store WHERE product.trademark_id = trademark.trademark_id AND product.trademark_id = 2 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghocitizen'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));

    }
    public function donghoorient()
    {
        $conn = ConnectionManager::get('default');
        $donghoorient = $conn->execute('SELECT * FROM product,trademark,species,store WHERE product.trademark_id = trademark.trademark_id AND product.trademark_id = 3 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghoorient'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));

    }
    public function donghocalvin()
    {
        $conn = ConnectionManager::get('default');
        $donghocalvin = $conn->execute('SELECT * FROM product,trademark,species,store WHERE product.trademark_id = trademark.trademark_id AND product.trademark_id = 4 AND product.species_id = species.species_id AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ',array(1));
        $this->set(compact('donghocalvin'));

        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark limit 5',array(1));
        $this->set(compact('trademark'));
    }
    public function sanphamnoibat()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $featured= $conn->execute("SELECT * FROM product, store WHERE substring(type,2,1) AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ",array(1));
        $this->set(compact('featured'));
    }
    public function sanphambanchay()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $selling = $conn->execute("SELECT * FROM product,store WHERE substring(type,3,1) AND store.store_id = product.store_id AND product.product_id ORDER BY RAND()",array(1));
        $this->set(compact('selling'));


    }
    public function sanphammoi()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $new = $conn->execute('SELECT * FROM product,species,store WHERE product.species_id = species.species_id AND product.species_id = 4 AND product.store_id = store.store_id AND product.product_id ORDER BY RAND()',array(1));
        $this->set(compact('new'));
    }
    public function xuhuong()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $trend = $conn->execute("SELECT * FROM product, store WHERE substring(type,4,1) AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ",array(1));
        $this->set(compact('trend'));
    }
    public function flashsale()
    {
        
    }
    public function donghocap()
    {

    }
    public function khuyenmai()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $catalogiessmall = $conn->execute('SELECT * FROM catalogli',array(1));
        $this->set(compact('catalogiessmall'));

        $conn = ConnectionManager::get('default');
        $trademark = $conn->execute('SELECT * FROM trademark',array(1));
        $this->set(compact('trademark'));

        $conn = ConnectionManager::get('default');
        $product = $conn->execute("SELECT * FROM product,store WHERE substring(type,1,1) AND product.store_id = store.store_id AND product.product_id ORDER BY RAND() ",array(1));
        $this->set(compact('product'));

        // $conn = ConnectionManager::get('default');
        // $product1= $conn->execute("SELECT * FROM product WHERE substring(type,2,1)",array(1));
        // $this->set(compact('product1'));

        // $conn = ConnectionManager::get('default');
        // $product2 = $conn->execute("SELECT * FROM product WHERE substring(type,3,1)",array(1));
        // $this->set(compact('product2'));

        // $conn = ConnectionManager::get('default');
        // $product3 = $conn->execute("SELECT * FROM product WHERE substring(type,4,1)",array(1));
        // $this->set(compact('product3'));
    }
    public function compare()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $catalogiessmall = $conn->execute('SELECT * FROM catalogli',array(1));
        $this->set(compact('catalogiessmall'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));
    }
    public function dangki()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        if($this->request->is('post'))
        {
            $username = $this->request->data["username"];
            $email = $this->request->data["email"];
            $password = $this->request->data["password"];
            $pass = $this->request->data["pass"];
            $name = $this->request->data["name"];
            $address = $this->request->data["address"];
            $tell = $this->request->data["tell"];
            $sex = $this->request->data["sex"];
            if ($username == "" || $email == "" || $password == "" || $pass =="" || $name =="" || $address=="" || $tell=="" || $sex=="") {
                echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
            }
            $query = $conn->execute("SELECT username FROM user WHERE username='$username'");
            if(count($query) == 1){
                echo "Tài khoản đã tồn tại. Vui lòng chọn tài khoản khác <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            $this->set(compact('query'));
            $query = $conn->execute("SELECT email FROM user WHERE email='$email'");
            if(count($query) == 1){
                echo "Email đã tồn tại. Vui lòng chọn email khác <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            $this->set(compact('query'));
            $password = md5($password);
            $pass = md5($pass);
            if ($password != $pass)
            {
                echo '<script>alert("Mật khẩu không trùng khớp")</script>';
            }else {
            $sql = $conn->execute("INSERT INTO user (username, email, password, name, address, tell, sex) VALUES ('$username', '$email', '$password', '$name', '$address', '$tell', '$sex')");
               $this->set(compact('sql'));
                echo '<script>alert("Đăng kí thành công !!!")</script>';
            }
            // if(isset($_POST["sex"])){
            //     echo $_POST["sex"];
            // }
        }

        
    }
    public function dangnhap()
    {
           $conn = ConnectionManager::get('default');
           $session = $this->getRequest()->getSession(); 
           $username =  $session->read('username');
        if (isset($_POST['dangnhap'])) 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
             
            //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
            if (!$username || !$password) {
                echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            // mã hóa pasword
            $password = md5($password);
            //Kiểm tra tên đăng nhập có tồn tại không
            $query = $conn->execute("SELECT username, password FROM user WHERE username='$username'");
            if (count($query) == 0) {
                echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            //Lấy mật khẩu trong database ra
           $this->set(compact('query'));
            //So sánh 2 mật khẩu có trùng khớp hay không
            //Lưu tên đăng nhập
            $session->write('username', $username);
            echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/web_banhang/product/index'>Về trang chủ</a>";
            die();
        }
    }
    public function quenmatkhau()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));
    }
    public function hoantat()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $conn = ConnectionManager::get('default');
        $menu = $conn->execute('SELECT * FROM menu ',array(1));
        $this->set(compact('menu'));

        $conn = ConnectionManager::get('default');
        $hoantat = $conn->execute("SELECT * FROM orders, orderdetail WHERE orders.order_id = orderdetail.order_id ",array(1));
        $this->set(compact('hoantat'));
    }
    public function dangxuat()
    {
        $conn = ConnectionManager::get('default');
        $catalogies = $conn->execute("SELECT * FROM catalog" ,array(1));
        $this->set(compact('catalogies'));

        $session = $this->getRequest()->getSession(); 
        if($session->check('username')){
            $session->delete('username');
        }
        echo "Bạn đã đăng xuất thành công. <a href='/web_banhang/product/index'>Về trang chủ</a>";
        die();
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Product->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Product->patchEntity($product, $this->request->getData());
            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $catalog = $this->Product->Catalog->find('list', ['limit' => 200]);
        $stores = $this->Product->Stores->find('list', ['limit' => 200]);
        $this->set(compact('product', 'catalog', 'stores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Product->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Product->patchEntity($product, $this->request->getData());
            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $catalog = $this->Product->Catalog->find('list', ['limit' => 200]);
        $stores = $this->Product->Stores->find('list', ['limit' => 200]);
        $this->set(compact('product', 'catalog', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Product->get($id);
        if ($this->Product->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
