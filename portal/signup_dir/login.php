<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kya's Academy - Student Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .registration-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #667eea;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .logo p {
            color: #666;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 0.95rem;
        }

        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #fafafa;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
            background-color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
        }

        .student-type-group {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .radio-option {
            flex: 1;
            position: relative;
        }

        .radio-option input[type="radio"] {
            display: none;
        }

        .radio-option label {
            display: block;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #fafafa;
            margin-bottom: 0;
            font-weight: 500;
        }

        .radio-option input[type="radio"]:checked + label {
            border-color: #667eea;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.25);
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .submit-btn:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            background-color: #fee;
            color: #c33;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #c33;
        }

        .error-message ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .error-message li {
            margin-bottom: 5px;
        }

        .success-message {
            background-color: #efe;
            color: #363;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #363;
            font-weight: 500;
        }

        .password-strength {
            font-size: 0.85rem;
            margin-top: 5px;
            padding: 8px;
            border-radius: 4px;
            display: none;
        }

        .password-strength.weak {
            background: #fee;
            color: #c33;
            display: block;
        }

        .password-strength.medium {
            background: #fef5e7;
            color: #d68910;
            display: block;
        }

        .password-strength.strong {
            background: #efe;
            color: #363;
            display: block;
        }

        .field-error {
            border-color: #e74c3c !important;
        }

        .field-success {
            border-color: #27ae60 !important;
        }

        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .student-type-group {
                flex-direction: column;
            }
            
            .registration-container {
                padding: 30px 20px;
            }
        }
    </style>
<link rel="stylesheet" href="/ripple.style.css">

<link rel="stylesheet" href="/scrollToTopButton.style.css">

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">

<script src="/scrollToTopButton.js"></script>
</head>
<body>
    <div class="registration-container">
        <div class="logo">
            <h1>Kya's Academy</h1>
            <p>Join our learning community</p>
        </div>

        
        
        <form id="registrationForm" method="POST" action="">
            <input type="hidden" name="csrf_token" value="9128b161ae8f76f58b25e37c5aaed608bbcb964b49b601c23b4889b274de1b98">
            
            <div class="form-row">
                <div class="form-group">
                    <label for="first_name">First Name *</label>
                    <input type="text" id="first_name" name="first_name" value="" required="" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name *</label>
                    <input type="text" id="last_name" name="last_name" value="" required="" maxlength="100">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" value="" required="" maxlength="255">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" required="" minlength="8">
                    <div id="password-strength" class="password-strength"></div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password *</label>
                    <input type="password" id="confirm_password" name="confirm_password" required="">
                    <div id="password-match" style="font-size: 0.85rem; margin-top: 5px;"></div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="age">Age *</label>
                    <input type="number" id="age" name="age" value="" required="" min="5" max="100">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" value="" maxlength="20">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="country_id">Country *</label>
                    <select id="country_id" name="country_id" required="">
                                                    <option value="6">
                                Australia                            </option>
                                                    <option value="10">
                                Brazil                            </option>
                                                    <option value="2">
                                Canada                            </option>
                                                    <option value="8">
                                France                            </option>
                                                    <option value="7">
                                Germany                            </option>
                                                    <option value="5">
                                India                            </option>
                                                    <option value="9">
                                Japan                            </option>
                                                    <option value="4">
                                Kenya                            </option>
                                                    <option value="3">
                                United Kingdom                            </option>
                                                    <option value="1" selected="">
                                United States                            </option>
                                            </select>
                </div>
                <div class="form-group">
                    <label for="primary_language_id">Primary Language *</label>
                    <select id="primary_language_id" name="primary_language_id" required="">
                                                    <option value="9">
                                Arabic                            </option>
                                                    <option value="10">
                                Chinese                            </option>
                                                    <option value="1" selected="">
                                English                            </option>
                                                    <option value="3">
                                French                            </option>
                                                    <option value="4">
                                German                            </option>
                                                    <option value="8">
                                Hindi                            </option>
                                                    <option value="5">
                                Italian                            </option>
                                                    <option value="11">
                                Japanese                            </option>
                                                    <option value="12">
                                Korean                            </option>
                                                    <option value="6">
                                Portuguese                            </option>
                                                    <option value="2">
                                Spanish                            </option>
                                                    <option value="7">
                                Swahili                            </option>
                                            </select>
                </div>
            </div>

          
                <div class="form-group" style="display: none;">
                <label>Student Type *</label>
                <div class="student-type-group">
                    <div class="radio-option">
                        <input type="radio" id="k12_student" name="student_type" value="k12_student" required="">
                        <label for="k12_student">
                            <strong>K-12 Student</strong><br>
                            <small>Ages 5-18, School Support</small>
                        </label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="adult_student" name="student_type" value="adult_student" required="">
                        <label for="adult_student">
                            <strong>Adult Learner</strong><br>
                            <small>18+, Professional Development</small>
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn" id="submit-btn">Create Account</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="login.php">Sign In</a>
        </div>
    </div>

    <script>
        // Auto-select student type based on age
        document.getElementById('age').addEventListener('input', function() {
            const age = parseInt(this.value);
            if (age >= 5 && age < 18) {
                document.getElementById('k12_student').checked = true;
            } else if (age >= 18) {
                document.getElementById('adult_student').checked = true;
            }
        });

        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthDiv = document.getElementById('password-strength');
            
            if (password.length === 0) {
                strengthDiv.style.display = 'none';
                this.className = this.className.replace(/field-(error|success)/, '');
                return;
            }
            
            let score = 0;
            let feedback = [];
            
            if (password.length >= 8) score++;
            else feedback.push('At least 8 characters');
            
            if (/[A-Z]/.test(password)) score++;
            else feedback.push('One uppercase letter');
            
            if (/[a-z]/.test(password)) score++;
            else feedback.push('One lowercase letter');
            
            if (/[0-9]/.test(password)) score++;
            else feedback.push('One number');
            
            if (score < 2) {
                strengthDiv.className = 'password-strength weak';
                strengthDiv.textContent = 'Weak password. Missing: ' + feedback.join(', ');
                this.className = this.className.replace(/field-(error|success)/, '') + ' field-error';
            } else if (score < 4) {
                strengthDiv.className = 'password-strength medium';
                strengthDiv.textContent = 'Medium password. Consider adding: ' + feedback.join(', ');
                this.className = this.className.replace(/field-(error|success)/, '');
            } else {
                strengthDiv.className = 'password-strength strong';
                strengthDiv.textContent = 'Strong password!';
                this.className = this.className.replace(/field-(error|success)/, '') + ' field-success';
            }
        });

        // Password confirmation checker
        document.getElementById('confirm_password').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const matchDiv = document.getElementById('password-match');
            
            if (confirmPassword.length === 0) {
                matchDiv.textContent = '';
                this.className = this.className.replace(/field-(error|success)/, '');
                return;
            }
            
            if (password === confirmPassword) {
                matchDiv.textContent = '✓ Passwords match';
                matchDiv.style.color = '#27ae60';
                this.className = this.className.replace(/field-(error|success)/, '') + ' field-success';
            } else {
                matchDiv.textContent = '✗ Passwords do not match';
                matchDiv.style.color = '#e74c3c';
                this.className = this.className.replace(/field-(error|success)/, '') + ' field-error';
            }
        });

        // Email validation
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                this.className = this.className.replace(/field-(error|success)/, '') + ' field-error';
            } else if (email) {
                this.className = this.className.replace(/field-(error|success)/, '') + ' field-success';
            } else {
                this.className = this.className.replace(/field-(error|success)/, '');
            }
        });

        // Form submission handler
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const submitBtn = document.getElementById('submit-btn');
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                return;
            }
            
            // Show loading state
            submitBtn.textContent = 'Creating Account...';
            submitBtn.disabled = true;
        });

        // Real-time form validation
        document.querySelectorAll('input[required], select[required]').forEach(function(field) {
            field.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.className = this.className.replace(/field-(error|success)/, '') + ' field-error';
                } else {
                    this.className = this.className.replace(/field-(error|success)/, '') + ' field-success';
                }
            });
        });
    </script>

</body></html>