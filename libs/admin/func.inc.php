<?php

class helperAdmin
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /* function showMsg()
     *
     * @param $_SESSION['aError'] = array('type'=> :string, 'text' => :string);
     *
     */
    public function showMsg()
    {

        if (!empty($_SESSION['aMsg'])) {
            echo "<h4>" . ucwords($_SESSION['aMsg']['type']) . ": " . $_SESSION['aMsg']['text'] . "</h4>";
            $_SESSION['aMsg'] = array();
            return;
        }

    }

    /* function setMsg()
     *
     * @param $type :enum(error, success, info);
     * @param $text :string;
     *
     */
    public function setMsg($type, $text)
    {

        $_SESSION['aMsg']['type'] = $type;
        $_SESSION['aMsg']['text'] = $text;

        return;
    }

    public function productQuery($db)
    {
        $sql = "SELECT * FROM product";
        return $product = $db->query($sql);
    }

    /* function doLogin()
     *
     * @param $user :string
     * @param $pass :string
     *
     */
    public function doLogin($username, $password)
    {

        $stmt = $this->db->prepare("SELECT * FROM admin WHERE username=:username LIMIT 1");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if (!empty($user)) {

            if (password_verify($password, $user['password'])) {

                $_SESSION['aMsg']['type'] = "success";
                $_SESSION['aMsg']['text'] = "เข้าสู่ระบบสำเร็จ";
                $_SESSION['isLogin'] = true;
                $_SESSION['admin_id'] = $user['id'];

                $this->redirectDashboard();

                return;

            } else {

                $this->setMsg("error", "รหัสผ่านของคุณไม่ถูกต้อง");
                return false;

            }

        } else {

            $this->setMsg("error", "ไม่พบรหัสของท่าน");
            return false;

        }

    }

    /* function checkLogin() */
    public function checkLogin()
    {
        if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) {
            return true;
        }
        return false;
    }

    /* function checkLogin() */
    public function redirectLogin()
    {

        header('Location: ' . ROOT_URL . '/admin');
        exit();

    }

    /* function checkLogin() */
    public function redirectDashboard()
    {

        header('Location: ' . ROOT_URL . '/admin/dashboard.php');
        exit();

    }
    /* function checkLogin() */
    public function Logout()
    {
        session_destroy();
        unset($_SESSION);
        unset($_SESSION['isLogin']);
        header('Location: ' . ROOT_URL . '/admin');
        exit();

    }
}
