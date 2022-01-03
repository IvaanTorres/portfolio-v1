import axiosInstance from "./axios";
import { AxiosResponse } from "axios";
import Skill from "../interfaces/Skill";

export const all = async (type: string): Promise<AxiosResponse<Skill[]>> =>
  await axiosInstance.get("/skills/" + type);
