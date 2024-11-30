import { adminPage } from '../pages/Admin.Page';

describe('Admin Page Tests', () => {
    const email = 'admin@gmail.com';
    const password = '123';
    const filePath = 'membaca.jpg';

    beforeEach(() => {
        // Visit the admin login page before each test
        adminPage.visit();
    });

    describe('Login Tests', () => {
        it('should log in successfully with valid credentials', () => {
            // Log in with valid credentials
            adminPage.login(email, password);
            adminPage.verifyLoginSuccess();
        });
    });

    describe('add News create', () => {
        beforeEach(() => {
            // Ensure login is successful before each news test
            adminPage.login(email, password);
            adminPage.verifyLoginSuccess();
            adminPage.clickNewsMenu();
            adminPage.verifyNewsPage();
        });

        it('should navigate to the News page', () => {
            // Verify user is on the News page
            adminPage.verifyNewsPage();
        });

        it('should create a new news article', () => {
            // Click the New News button
            adminPage.clickNewNewsButton();

            // Fill the form with title, category, status, file, and editor content
            const name = 'New News Article';
            const category = '2'; // '2' for Berita Acara
            const status = 'Draft'; // 'draft' for Draft status
            const content = 'awdasdwada';  // Content for the TinyMCE editor

            adminPage.fillCreateNewsFormAndEditor(name, category, status, filePath, content);
            cy.wait(8000); // Wait for any async operations (e.g., file upload, editor content load)

            // Optionally, submit the form (ensure there's a method to submit)
            adminPage.submitCreateNewsForm();

        });

        // Additional test for creating another type of news (if needed)
        it('should create another type of news article', () => {
            adminPage.clickNewNewsButton();

            const name = 'Another News Article';
            const category = '1'; // '1' for Berita Lainnya
            const status = 'Publish'; // 'publish' for Published status
            const content = 'Another content for the editor';  // Content for the TinyMCE editor

            adminPage.fillCreateNewsFormAndEditor(name, category, status, filePath, content);
            cy.wait(8000); // Wait for async operations

            // Submit the form and verify
            adminPage.submitCreateNewsForm();

            cy.wait(30000);
        });
    });
});
