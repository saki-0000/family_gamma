import { Ref } from "vue";

export const updateTitle = (title: Ref<string>) => (text: string) =>
    (title.value = text);
export const useTitle = () => {
    const value = useState<string>("title", () => "");
    return {
        title: readonly(value),
        updateTitle: updateTitle(value),
    };
};
