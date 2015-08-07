<?PHP

require_once 'Model.php';

class User extends Model{
    protected static $table = 'Contacts';

    public static function find($id)
    {
        self::dbConnect();
        $query = 'SELECT * FROM Contacts WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result){
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    public static function all()
    {
        self::dbConnect();
        $stmt = self::$dbc->query('SELECT * FROM Contacts');

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
         $instance = null;
        if ($result){
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;

        return $result;

    }

    public function save()
    {

    }

    public function update()
    {
        $query = 'UPDATE Contacts
                    SET username = :username,
                    password = :password,
                    email = :email
                    WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function insert()
    {
        $query = 'INSERT INTO Contacts (username, password, email) VALUES (:username, :password, :email)';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->execute();

    }

    public function delete()
    {
        
    }
}

// $user = new User;
// $user->username = 'Remington';
// $user->password = '';
// $user->email = 'remingtonwilliams@gmail.com';
// $user->save();