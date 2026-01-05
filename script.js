async function search() {
  const id = document.getElementById("nid").value.trim();
  const resultDiv = document.getElementById("result");

  if (id === "") {
    resultDiv.innerHTML = "⚠️ أدخل رقم الهوية";
    return;
  }

  const response = await fetch("data.json");
  const data = await response.json();

  const student = data.find(s => s.national_id.trim() === id);

  if (student) {
    resultDiv.innerHTML = `
      <p><strong>الاسم:</strong> ${student.student_name}</p>
      <p><strong>الدرجة:</strong> ${student.score}</p>
      <p><strong>النتيجة:</strong> ${student.result}</p>
    `;
  } else {
    resultDiv.innerHTML = "❌ لا توجد نتيجة لهذا الرقم";
  }
}

