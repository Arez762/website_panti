class AdminPage {
    // URL halaman admin
    url = 'http://127.0.0.1:8000/admin/login';

    // Elemen pada halaman admin
    emailInput = '#data\\.email';
    passwordInput = 'input[type="password"]'; 
    loginButton = '.fi-btn:contains("Sign in")'; 

    // Metode untuk mengunjungi halaman admin
    visit() {
        cy.visit(this.url);
        return this;
    }

    // Metode untuk login dengan email dan password
    login(email, password) {
        cy.get(this.emailInput).type(email); 
        cy.get(this.passwordInput).type(password); 
        cy.get(this.loginButton).click(); 
        return this;
    }

    // Metode untuk memastikan login berhasil
    verifyLoginSuccess() {
        cy.get('h1').should('contain', 'Dashboard'); 
        return this;
    }
}

export const adminPage = new AdminPage();
