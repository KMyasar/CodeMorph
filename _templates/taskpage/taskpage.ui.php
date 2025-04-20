<!-- Main Content -->
<main>
    <section class="container">
      <h1>What do you want to convert</h1>
      <h3>Analyse, Code, Check</h3>
      <br>
      <div class="prompt-box">
        Write a function to check if the entered integer is odd or even.<br>
        Return "Odd" if the number is odd and "Even" if it's even.
      </div>
      <br>
      <div class="code-container">
        <div class="code-box">
          <select id="language" class="form-select" onchange="updateCode()">
            <option>Select</option>
            <option>Python</option>
            <option>C++</option>
            <option>Java</option>
          </select>
          <br>
          <textarea id="code-display" readonly></textarea>
        </div>
        <div class="code-box">
          <textarea placeholder="Type your code here..."></textarea>
          <button class="btn btn-primary mt-2 float-end">Submit</button>
        </div>
      </div>
    </section>
  </main>
  <script>
    function updateCode() {
      let codeExamples = {
        'Python': 'def check_odd_even(n):\n    return "Odd" if n % 2 else "Even"',
        'C++': '#include<iostream>\nusing namespace std;\nstring checkOddEven(int n) {\n    return (n % 2) ? "Odd" : "Even";\n}',
        'Java': 'public class Main {\n    static String checkOddEven(int n) {\n        return (n % 2 != 0) ? "Odd" : "Even";\n    }\n}'
      };
      let selectedLang = document.getElementById("language").value;
      document.getElementById("code-display").value = codeExamples[selectedLang] || "";
    }
  </script>