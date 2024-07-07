
const donateInput = document.getElementById("donateA");
const donateBtn = document.getElementById("donate-btn");

donateBtn.addEventListener("click", () => {
  const dntValue = donateInput.value;
  donateBtn.href = `checkout.php?dnt=${dntValue}`;
});
