import { adminPage } from '../pages/Admin.Page';

describe('Admin Page Login', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    it('should log in successfully', () => {
        // Visit the admin page and perform login
        adminPage.visit().login(email, password);

        // Verify successful login by checking dashboard header
        adminPage.verifyLoginSuccess();
    });
});