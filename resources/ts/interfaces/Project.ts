import Skill from "./Skill";

export default interface Project {
  id: number;
  name: string;
  description: string;
  skills: Skill[];
  src_img: string;
  link_repo: string;
  link_demo?: string;
  link_yt?: string;
  isDev: boolean;
  isMain: boolean;
}
