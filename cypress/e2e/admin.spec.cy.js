import { adminPage } from '../pages/Admin.Page';

describe('Admin Page Login Tests', () => {
    it('should log in successfully', () => {
        // Data login
        const email = 'admin@gmail.com'; 
        const password = '123'; 

        // Jalankan pengujian login
        adminPage.visit().login(email, password);

        // Verifikasi login berhasil
        adminPage.verifyLoginSuccess();
    });
});
