const express = require("express");
const cors = require("cors");
const app = express();

app.use(cors());
app.use(express.json());

const USER = {
  username: "dungdeptrai",
  password: "123456",
};

app.post("/login", (req, res) => {
  const { username, password } = req.body;

  if (username === USER.username && password === USER.password) {
    return res.json({ success: true, message: "Dang nhap thanh cong!" });
  } else {
    return res.json({
      success: false,
      message: "Sai tai khoan hoac mat khau!",
    });
  }
});

app.listen(3000, () => {
  console.log("Server dang chay tai http://localhost:3000");
});
