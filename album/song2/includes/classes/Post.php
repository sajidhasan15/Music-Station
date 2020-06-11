<?php 

class Post{

	private $user_obj;
	private $con;

	public function __construct($con, $user){
		$this->con = $con;
		$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$user");
		$this->user_obj = new User($con, $user);
	}

	public function submitPost($body, $user_to){
		
		$body = strip_tags($body);  //Remove html tag
		$body = mysqli_real_escape_string($this->con, $body);
		$check_empty = preg_replace('/\s+/', '', $body); //Deltes all space

		if ($check_empty != "") {
			

			//current date and time
			$date_added =  date("Y-m-d H:i:s");

			//Get username
			$added_by = $this->user_obj->getUsername();

			//If user is on own profile, user_to is 'none'
			if ($user_to == $added_by){
				$user_to = "none";
			}
		}
	}


	public function loadPostFriends(){
		$str = ""; //String to return
		$data = mysqli_query($this->con, "SELECT * FROM posts WHERE deleted='no' ORDER BY id DESC");

		while ($row = mysqli_fettch_array($data)) {
			$id = $row['id'];
			$body = $row['body'];
			$added_by = $row['added_by'];
			$date_time = $row['date_time'];

			//Prepair user_to string so it can be include even if not posted to a user

			if ($row['user_to'] == "none") {
				$user_to = "";
			}
			else{
				$user_to_obj = row User($con, $row['user_to']);
				$user_to_name = $user_to_obj->getFirstAndLastName();
				$user_to = "<a href ='" .$row['user_to']."'>'".$user_to_name ."</a>"
			}
		}
	}



	?>