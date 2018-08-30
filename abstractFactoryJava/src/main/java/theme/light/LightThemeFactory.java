package theme.light;

import theme.DialogInterface;
import theme.FooterInterface;
import theme.ThemeFactory;
import theme.ToolbarInterface;

/**
 * This class is responsible of the light theme components creation.
 */
public class LightThemeFactory extends ThemeFactory {

    /**
     * {@inheritDoc}
     */
    public DialogInterface createDialog() {
        return new LightDialog();
    }

    /**
     * {@inheritDoc}
     */
    public ToolbarInterface createToolbar() {
        return new LightToolbar();
    }


    /**
     * {@inheritDoc}
     */
    public FooterInterface createFooter() {
        return new LightFooter();
    }
}
