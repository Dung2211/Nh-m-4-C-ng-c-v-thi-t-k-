const express = require("express");
const cors = require("cors");
const app = express();

app.use(cors());
app.use(express.json());

const USER = [
  { username: "admin", password: "dungdeptrai" },
  { username: "dung", password: "111" },
  { username: "khanh", password: "111" },
  { username: "linh", password: "111" },
  { username: "tdung", password: "111" },
  { username: "rin", password: "111" },
  { username: "mkhanh", password: "111" },
];
// const USER = {
//   username: "admin",
//   password: "123"
// };

// app.post("/login", (req, res) => {
//   const { username, password } = req.body;

//   if (username === USER.username && password === USER.password) {
//     return res.json({ success: true, message: "Dang nhap thanh cong!" });
//   } else {
//     return res.json({
//       success: false,
//       message: "Sai tai khoan hoac mat khau!",
//     });
//   }
// });
app.post("/login", (req, res) => {
  const { username, password } = req.body;

  const user = USER.find(
    (u) => u.username === username && u.password === password
  );

  if (user) {
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
