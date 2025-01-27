function showPersonalTraining() {
  document.getElementById("personalTraining").style.display = "flex";
  document.getElementById("nutritionCoaching").style.display = "none";
  document.getElementById("groupWorkouts").style.display = "none";
}

function showNutritionCoaching() {
  document.getElementById("personalTraining").style.display = "none";
  document.getElementById("nutritionCoaching").style.display = "flex";
  document.getElementById("groupWorkouts").style.display = "none";
}

function showGroupWorkouts() {
  document.getElementById("personalTraining").style.display = "none";
  document.getElementById("nutritionCoaching").style.display = "none";
  document.getElementById("groupWorkouts").style.display = "flex";
}
