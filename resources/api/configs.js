import axios from "./axios";

export const getConfigs = () => {
    try {
        const { data, status } = axios.get('/configs');

        if (status === 200) {
            return data;
        }

        return null;
    } catch (e) {
        console.error(e);

        return null;
    }
}
