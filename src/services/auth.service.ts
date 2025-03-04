import axios, { AxiosResponse } from 'axios';
import type { ILoginResponse } from '../types';

const API_URL = '/backend/';

const login = async (username: string, password: string): Promise<ILoginResponse> => {
  try {
    const response: AxiosResponse<ILoginResponse> = await axios.post(`${API_URL}login.php`, {
      username,
      password,
    });
    return response.data;
  } catch (error:any) {
    console.error('Login failed:', error);
    throw error.response ? error.response.data : error;
  }
};

const logout = async (userId: string, authToken: string): Promise<any> => {
  try {
    const response: AxiosResponse<any> = await axios.post(`${API_URL}logout.php`, {
        userId,
        authToken,
      });
      return response.data;
  } catch (error:any) {
    console.error('Logout failed:', error);
    throw error.response ? error.response.data : error;
  }
};

export default {
  login,
  logout,
};
