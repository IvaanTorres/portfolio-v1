import axiosInstance from "./axios";
import { AxiosResponse } from "axios";
import Project from "../interfaces/Project";

export const getMain = async (): Promise<AxiosResponse<Project[]>> =>
  await axiosInstance.get("/projects/main");
export const getByType = async (
  type: string
): Promise<AxiosResponse<Project[]>> =>
  await axiosInstance.get("/projects/" + type);
export const find = async (
  type: string,
  id: number
): Promise<AxiosResponse<Project>> =>
  await axiosInstance.get("/projects/" + type + "/" + id);
